-- IF
DROP procedure IF EXISTS `exemplo`;

DELIMITER $$ 
CREATE PROCEDURE exemplo() 
BEGIN 
	DECLARE limite int DEFAULT 1;
    DECLARE quantidade int;
    DECLARE nome varchar(50);
	SELECT first_name into nome from cliente LIMIT 0, limite;
	SELECT count(*) into quantidade from cliente where first_name = nome;
    
    IF quantidade > 4 THEN 
		SELECT "MAIS DE QUATRO REGISTROS";
	ELSE 
		SELECT * from cliente where first_name = nome;
    END IF;
    
END$$ 
DELIMITER ;

call exemplo;