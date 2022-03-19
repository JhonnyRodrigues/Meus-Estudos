DROP procedure IF EXISTS `muda_para`;

DELIMITER $$
CREATE PROCEDURE `muda_para` (in valor INT)
BEGIN
	DECLARE idLocal INT;
    DECLARE temp INT;

	DECLARE termino INT DEFAULT FALSE;
    DECLARE lista CURSOR FOR SELECT cliente.id FROM cliente;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET termino = TRUE;
  
    OPEN lista;
    entra_loop: LOOP
    
    	FETCH lista INTO idLocal;
	
		IF termino THEN
		  LEAVE entra_loop;
		END IF;
        
		UPDATE aula.cliente SET `total` = valor WHERE cliente.id = idLocal;
        -- COMMIT;
        SELECT sleep(0.002) into temp;
        
	END LOOP;
	CLOSE lista;
    
    
END$$
DELIMITER ;







