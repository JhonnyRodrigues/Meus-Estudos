DROP procedure IF EXISTS `exemplo`;

DELIMITER $$
CREATE PROCEDURE `exemplo` ()
BEGIN
	DECLARE quantidade, incremento, inicio INT;
    
    SET incremento = 3;
    SET inicio = 0;
    
	select count(*) into quantidade FROM cliente;
    
    
    REPEAT
		SET inicio = inicio + incremento;
    UNTIL inicio >= quantidade
    END REPEAT;
      
	SELECT inicio, incremento, quantidade;
    
END$$
DELIMITER ;

call exemplo;
