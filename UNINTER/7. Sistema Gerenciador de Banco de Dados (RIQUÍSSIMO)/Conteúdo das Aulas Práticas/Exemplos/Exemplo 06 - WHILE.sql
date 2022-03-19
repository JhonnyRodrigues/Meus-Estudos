DROP procedure IF EXISTS `exemplo`;

DELIMITER $$
CREATE PROCEDURE `exemplo` ()
BEGIN
	DECLARE quantidade, incremento, inicio INT;
    
    SET incremento = 3;
    SET inicio = 0;
    
	select count(*) into quantidade FROM cliente;
    
    WHILE inicio < quantidade DO
		SET inicio = inicio + incremento;
    END WHILE;
  
  SELECT inicio, incremento, quantidade;
    
END$$
DELIMITER ;

call exemplo;
