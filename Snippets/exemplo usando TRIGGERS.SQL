--------------------------------------------------------------------------------------
------------------------- BUSCA VALOR PARA A PRIMARY KEY ----------------------------
--------------------------------------------------------------------------------------
CREATE OR REPLACE TRIGGER GEN_PAC_ASSINATURAS
BEFORE INSERT ON PAC_ASSINATURAS
FOR EACH ROW 
WHEN (NEW.ID_ASSINATURA IS NULL)
BEGIN
	SELECT SEQ_PAC_ASSINATURAS.NEXTVAL
	INTO :NEW.ID_ASSINATURA
	FROM DUAL;
END;

--------------------------------------------------------------------------------------
------------------------ SINCRONIZA CAMPO EM OUTRA TABELA ----------------------------
--------------------------------------------------------------------------------------
CREATE OR REPLACE TRIGGER SGI.SYNC_FUNCIONARIO_CARGO
FOR UPDATE ON SGI.RH_CARGO  
COMPOUND TRIGGER
	-- Variaveis declaradas
	CARGO_IDS VARCHAR2(2000) := '';
	ATUALIZA_FUNCIONARIOS NUMBER := 0;

	BEFORE EACH ROW IS
		BEGIN
			IF(
				(:OLD.NOME_CARGO IS NOT NULL AND :NEW.NOME_CARGO IS NULL) 
				OR
				(:OLD.NOME_CARGO IS NULL AND :NEW.NOME_CARGO IS NOT NULL) 
				OR
				(:OLD.NOME_CARGO <> :NEW.NOME_CARGO) 
			) THEN
				-- Realiza Atualização no nome do cargo de Origem/Exercicio na tabela RH_FUNCIONARIOS
				ATUALIZA_FUNCIONARIOS := 1;
			
				-- Previnir o estouro do varchar (tamanho da string atual + virgula + tamanho do valor atual)
				IF((COALESCE(LENGTH(CARGO_IDS), 0) + 1 + COALESCE(LENGTH(:NEW.ID_CARGO), 0)) < 2000) THEN
					IF(CARGO_IDS = '' OR CARGO_IDS IS NULL) THEN
						CARGO_IDS := :NEW.ID_CARGO;
					ELSE
						CARGO_IDS := CARGO_IDS || ',' || :NEW.ID_CARGO;
					END IF;
				END IF;
			END IF;
	END BEFORE EACH ROW;

	AFTER STATEMENT IS
	BEGIN
		IF(ATUALIZA_FUNCIONARIOS = 1) THEN
			-- Realiza um for para interar os possiveis IDs que foram atualizados
			FOR cargo IN (
				SELECT REGEXP_SUBSTR(CARGO_IDS, '[^,]+', 1, LEVEL) AS ID_TAB_CARGO
				FROM dual
				CONNECT BY REGEXP_SUBSTR(CARGO_IDS, '[^,]+', 1, LEVEL) IS NOT NULL
			)
			LOOP
				-- Realiza atualização dos cargos de origem
				UPDATE RH_FUNCIONARIOS RF
				SET		RF.CARGO_ORIGEM = RF.CARGO_ORIGEM
				WHERE 	RF.FK_ID_CARGO_ORIGEM = cargo.ID_TAB_CARGO;
			
				-- Realiza atualização dos cargos em exercicio
				UPDATE RH_FUNCIONARIOS RF
				SET		RF.CARGO_EXERCICIO = RF.CARGO_EXERCICIO
				WHERE 	RF.FK_ID_CARGO_EXERCICIO = cargo.ID_TAB_CARGO;
			END LOOP;
		END IF;
	END AFTER STATEMENT;
END;


--------------------------------------------------------------------------------------
----------------------------------- SINCRONIZA NOME CARGO ----------------------------
--------------------------------------------------------------------------------------
CREATE OR REPLACE TRIGGER SGI.SGI.SYNC_RH_NOME_CARGO
BEFORE INSERT OR UPDATE ON SGI.RH_FUNCIONARIOS
FOR EACH ROW 
DECLARE 
cargo_origem VARCHAR(60);
cargo_exercicio VARCHAR(60);

BEGIN       
		/*IF (:NEW.FK_ID_CARGO_ORIGEM IS NULL) THEN
			:NEW.FK_ID_CARGO_ORIGEM := '999'; --SEM CADASTRO
        END IF;	      
		SELECT C.NOME_CARGO INTO cargo_origem FROM RH_CARGO C WHERE C.ID_CARGO = :NEW.FK_ID_CARGO_ORIGEM;
		:NEW.CARGO_ORIGEM := cargo_origem;

		IF (:NEW.FK_ID_CARGO_EXERCICIO IS NULL AND :NEW.CARGO_EXERCICIO IS NULL) THEN
			:NEW.FK_ID_CARGO_EXERCICIO := :NEW.FK_ID_CARGO_ORIGEM;
			SELECT C.NOME_CARGO INTO cargo_exercicio FROM RH_CARGO C WHERE C.ID_CARGO = :NEW.FK_ID_CARGO_EXERCICIO;
			:NEW.CARGO_EXERCICIO := cargo_exercicio;
        END IF;*/
	----------------------------------------------------------------------------------
		IF (:NEW.FK_ID_CARGO_ORIGEM IS NULL) THEN
			:NEW.FK_ID_CARGO_ORIGEM := '999'; --SEM CADASTRO
        END IF;	      
       	
       	BEGIN 
	       	
			SELECT 	RC.NOME_CARGO 
			INTO 	:NEW.CARGO_ORIGEM 
			FROM 	RH_CARGO RC 
			WHERE 	RC.ID_CARGO = :NEW.FK_ID_CARGO_ORIGEM;
		
		EXCEPTION 
	      	WHEN NO_DATA_FOUND THEN
	      		:NEW.CARGO_ORIGEM := 'SEM CADASTRO';
	      		:NEW.FK_ID_CARGO_ORIGEM := '999';
      	END;
      
		IF (:NEW.FK_ID_CARGO_EXERCICIO IS NULL) THEN
			:NEW.FK_ID_CARGO_EXERCICIO := :NEW.FK_ID_CARGO_ORIGEM;
        END IF;
       
       BEGIN 
	       	
			SELECT 	RC.NOME_CARGO 
			INTO 	:NEW.CARGO_EXERCICIO 
			FROM 	RH_CARGO RC 
			WHERE 	RC.ID_CARGO = :NEW.FK_ID_CARGO_EXERCICIO;
		
		EXCEPTION 
	      	WHEN NO_DATA_FOUND THEN
	      		:NEW.CARGO_EXERCICIO := :NEW.CARGO_ORIGEM;
	      		:NEW.FK_ID_CARGO_EXERCICIO := :NEW.FK_ID_CARGO_ORIGEM;
      	END;
/*
		dbms_output.Put_line('---------------------------');
		dbms_output.Put_line('---------------------------');
		dbms_output.Put_line('FK_ID_CARGO_ORIGEM:' || :NEW.FK_ID_CARGO_ORIGEM);
		dbms_output.Put_line('FK_ID_CARGO_EXERCICIO:' || :NEW.FK_ID_CARGO_EXERCICIO);
		dbms_output.Put_line('descricao_cargo:' || descricao_cargo);
*/
END;


-------------------------------------------------------------------------------------------
------------------------- SINCRONIZA NOME CIVIL -------------------------------------------
-------------------------------------------------------------------------------------------

CREATE OR REPLACE TRIGGER SGI.SGI.SYNC_RH_NOME_CIVIL
BEFORE INSERT OR UPDATE ON RH_FUNCIONARIOS
FOR EACH ROW 
BEGIN 
	IF (:NEW.NOME_CIVIL IS NULL) THEN 
		:NEW.NOME_CIVIL := :NEW.NOME_FUNCIONARIO;
	END IF;
	--dbms_output.Put_line('---------------------------');
	--dbms_output.Put_line('NOME_CIVIL:' || :NEW.NOME_CIVIL);
END;


------------------------------------------------------------------------------------------
------------------------------- DESATIVA USUÁRIO -----------------------------------------
------------------------------------------------------------------------------------------

CREATE OR REPLACE TRIGGER SGI.DESATIVA_USUARIO
AFTER INSERT OR UPDATE
ON RH_FUNCIONARIOS
FOR EACH ROW
DECLARE 
	logn VARCHAR2(25);
BEGIN
	logn := :NEW.NOME_USUARIO;

	IF :NEW.DT_DEMISSAO IS NOT NULL THEN
		UPDATE SEGURANCA_USERS SET ACTIVE = 'N' WHERE UPPER(LOGIN) = UPPER(logn);
		--dbms_output.Put_line('IF DEMISSÃO IS NOT NULL');
	END IF;	
	--dbms_output.Put_line('FIM DA TRIGGER DESATIVA_USUARIO');
END;


-----------------------------------------------------------------------------------------
------------------------------ BLOQUEIO HORA EXTRA --------------------------------------
-----------------------------------------------------------------------------------------

CREATE OR REPLACE TRIGGER SGI.BLOQUEIO_HORA_EXTRA
BEFORE INSERT OR UPDATE 
ON RH_FUNCIONARIOS 
FOR EACH ROW
DECLARE 
	jornada INTEGER;
	contrato INTEGER;
BEGIN
-- SERVIDOR COM RESTRIÇÃO MÉDICA
	BEGIN
		SELECT COD_JORNADA_TRABALHO 
		INTO jornada
		FROM RH_FUNCIONARIOS_JORNADAS 
		WHERE COD_FUNCIONARIO = :NEW.COD_FUNCIONARIO
		AND DT_FIM_JORNADA IS NULL;
		
		IF      (:NEW.RESTRICAO_MEDICA = 1 AND jornada != 2 AND jornada != 3 AND jornada != 6 AND jornada != 7 AND jornada != 8 AND jornada != 9 ) THEN
			     :NEW.BLOQUEIO_HE := 1;
		--dbms_output.Put_line('jornada:' || jornada);
		--ELSE 
			--     :NEW.BLOQUEIO_HE := 0;
		END IF;
	
		EXCEPTION
			WHEN NO_DATA_FOUND THEN
			--dbms_output.Put_line('query retornou vazia (COD_JORNADA_TRABALHO)');
			:NEW.BLOQUEIO_HE := 0; -- edit: NÃO bloqueia H.E. se não existir registro de jornada do funcionário
	END;
	
-- SERVIDOR CONTRATADO COMISSIONADO OU EXERCENDO CARGO EM COMISSÃO
	BEGIN
		IF	(:NEW.COD_TIPO_CARGO = 1)	THEN
			:NEW.BLOQUEIO_HE := 1;
			--dbms_output.Put_line('if COD_TIPO_CARGO');
		END IF;
	
		SELECT FK_CONTRATO
		INTO contrato
		FROM RH_FUNCIONARIOS_CARGOS_EXERC
		WHERE FK_FUNCIONARIO = :NEW.COD_FUNCIONARIO
		AND DATA_TERMINO IS NULL;
	
		IF	(contrato = 1)	THEN
			:NEW.BLOQUEIO_HE := 1;
			--dbms_output.Put_line('contrato encontrado! nº' || contrato);
		END IF;
		
		EXCEPTION
			WHEN NO_DATA_FOUND THEN
				--dbms_output.Put_line('query retornou vazia (FK_CONTRATO)');
				IF	(:NEW.COD_TIPO_CARGO = 1)	THEN
					:NEW.BLOQUEIO_HE := 1;
				END IF;
	END;

-- SERVIDOR PLANTONISTA
	BEGIN
		IF (:NEW.PLANTONISTA = 1) THEN
			:NEW.BLOQUEIO_HE := 1;
			--dbms_output.Put_line('if PLANTONISTA');
		END IF;
	END;
	dbms_output.Put_line('FIM da trigger bloqueio_HE');
END;

----------------------------------------------------------------------------------
------------------ CRIA NOVO ID PARA A TABELA QUANDO VAZIO -----------------------
----------------------------------------------------------------------------------
CREATE OR REPLACE TRIGGER SGI.GEN_LOGS_EMAILS
BEFORE INSERT ON LOGS_EMAILS
FOR EACH ROW WHEN (NEW.ID_LOG IS NULL AND NEW.DATA_INSERCAO IS NULL)
BEGIN
	SELECT  SEQ_LOGS_EMAILS.NEXTVAL
	INTO    :NEW.ID_LOG
	FROM    DUAL;

	:NEW.DATA_INSERCAO := SYSDATE;
END;