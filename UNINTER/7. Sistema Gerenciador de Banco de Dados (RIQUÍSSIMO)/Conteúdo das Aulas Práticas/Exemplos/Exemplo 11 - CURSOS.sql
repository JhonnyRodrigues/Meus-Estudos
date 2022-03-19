

    
Drop PROCEDURE IF EXISTS exemplo;
DELIMITER $$

CREATE PROCEDURE exemplo ()
BEGIN
DECLARE idLocal int;
DECLARE sexoLocal VARCHAR(50);
DECLARE quantidadeLocal NUMERIC;
DECLARE novaQuantidade NUMERIC;

DECLARE termino INT DEFAULT FALSE;
DECLARE lista CURSOR FOR SELECT cliente.id, cliente.sexo, sum(consumo.quantidade) FROM cliente INNER JOIN consumo on cliente.id = consumo.idcliente
	GROUP BY id;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET termino = TRUE;
    
    
    
    DROP TABLE IF EXISTS temp_aumento;
	CREATE TABLE TEMP_AUMENTO (
	id INT,
	sexo varchar(50),
	quantidade NUMERIC,
	nova_quantidade NUMERIC);
    
    
    OPEN lista;
    novoloop: LOOP
		FETCH lista INTO idLocal, sexoLocal, quantidadeLocal;
        
        IF termino THEN
			LEAVE novoloop;
        END IF;
        
        
        CASE sexoLocal
			WHEN 'Male' THEN
				SET novaQuantidade = quantidadeLocal * 0.9;
            WHEN 'Female' THEN
				SET novaQuantidade = quantidadeLocal * 0.80;
		END CASE;
        
        INSERT INTO `aula`.`temp_aumento` VALUES
		(idLocal, sexoLocal, quantidadeLocal, novaQuantidade);
    
    END Loop;
    CLOSE lista;
    
END$$

DELIMITER ;
CALL exemplo;
