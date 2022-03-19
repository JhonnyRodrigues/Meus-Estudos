

-- REPEAT
DROP procedure IF EXISTS `exemplo`;

DELIMITER $$ 
CREATE PROCEDURE exemplo() 
BEGIN 
    DECLARE quantidade, inicio, incremento int;
    DECLARE nome varchar(50);
    
    SELECT count(*) into quantidade from cliente;
    
    SET incremento = 3;
    SET inicio = 0;
    
    REPEAT
		SET inicio = inicio + incremento;
	UNTIL inicio >= quantidade
	END REPEAT;

    
    SELECT inicio, quantidade, incremento;
    
END$$ 
DELIMITER ;

call exemplo;