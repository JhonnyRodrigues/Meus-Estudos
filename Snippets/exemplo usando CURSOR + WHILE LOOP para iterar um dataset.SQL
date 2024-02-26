-- O objetivo desse script era encontrar o departamento responsável pela lotação do funcionário
DECLARE
	contador_seguranca NUMBER := 0;
	lotacao NUMBER := 9;
	is_departamento BOOLEAN := FALSE;
	CURSOR dataset_departamentos IS
    	SELECT 
			COD_LOTACAO AS COLUNA_DEPARTAMENTO
		FROM 
			RH_LOTACOES
		WHERE
			(
			   NOME_LOTACAO LIKE '%PRESID_N%'
			OR NOME_LOTACAO LIKE '%PROCURADORIA%'
			OR NOME_LOTACAO LIKE '%SUPERINTEND_NCIA%'
			OR NOME_LOTACAO LIKE '%DEP%'
			OR NOME_LOTACAO LIKE '%GER_NCIA%'
			)
		ORDER BY
			(CASE WHEN NOME_LOTACAO LIKE '%PRESID_N%' THEN 0 ELSE 4 END),
			(CASE WHEN NOME_LOTACAO LIKE '%PROCURADORIA%' THEN 1 ELSE 4 END),
			(CASE WHEN NOME_LOTACAO LIKE '%SUPERINTEND_NCIA%' THEN 2 ELSE 4 END),
			(CASE WHEN NOME_LOTACAO LIKE '%DEP%' THEN 3 ELSE 4 END),
			NOME_LOTACAO ASC;
BEGIN
	WHILE TRUE LOOP
    	FOR dataset_row_departamento IN dataset_departamentos LOOP
			IF lotacao = dataset_row_departamento.COLUNA_DEPARTAMENTO THEN
				is_departamento := TRUE;
				DBMS_OUTPUT.PUT_LINE('DEPARTAMENTO: ' || dataset_row_departamento.COLUNA_DEPARTAMENTO);
				EXIT;
			END IF;
		END LOOP;
    	EXIT WHEN is_departamento OR contador_seguranca > 10;    		
    	contador_seguranca := contador_seguranca + 1;
    	SELECT
			MIN(COD_LOTACAO_PAI)
		INTO
			lotacao
		FROM
			RH_LOTACOES
		WHERE
			COD_LOTACAO = lotacao;
	END LOOP;
END;