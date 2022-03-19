DROP procedure IF EXISTS `exemplo`;

DELIMITER $$
CREATE PROCEDURE `exemplo` ()
BEGIN

	DECLARE idLocal INT;
    DECLARE sexoLocal VARCHAR(50);
    DECLARE quantidadeLocal NUMERIC;
    DECLARE nova_quantidade NUMERIC;
    
	DECLARE termino INT DEFAULT FALSE;
    DECLARE lista CURSOR FOR 
		SELECT cliente.id, cliente.sexo, sum(consumo.quantidade) 
        FROM cliente INNER JOIN consumo on cliente.id = consumo.idcliente
        GROUP BY cliente.id;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET termino = TRUE;
    
       
	DROP TABLE IF EXISTS temp_aumento;
	CREATE TABLE TEMP_AUMENTO (
	id INT,
	sexo varchar(50),
	quantidade NUMERIC,
	nova_quantidade NUMERIC);

  
    OPEN lista;
    
    entra_loop: LOOP
    
    	FETCH lista INTO idLocal, sexoLocal, quantidadeLocal;
	
		IF termino THEN
		  LEAVE entra_loop;
		END IF;
        
        CASE sexoLocal
			WHEN 'Male' THEN
				SET nova_quantidade = quantidadeLocal * 0.8;
			WHEN 'Female' THEN
				SET nova_quantidade = quantidadeLocal * 0.9;
			ELSE
				SELECT 'NÃO REGISTRADO';
		END CASE;
        
        
		INSERT INTO `aula`.`temp_aumento` VALUES
		(idLocal, sexoLocal, quantidadeLocal, nova_quantidade);
		
	END LOOP;
    
  
	CLOSE lista;
    
    
END$$
DELIMITER ;

call exemplo();





