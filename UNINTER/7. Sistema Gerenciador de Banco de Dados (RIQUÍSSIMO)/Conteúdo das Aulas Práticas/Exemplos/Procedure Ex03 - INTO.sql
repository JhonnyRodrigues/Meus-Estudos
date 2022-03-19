-- into
DROP procedure IF EXISTS `exemplo`;

DELIMITER $$ 
CREATE PROCEDURE exemplo() 
BEGIN 
	DECLARE limite int DEFAULT 1;
    DECLARE nome varchar(50);
	SELECT first_name into nome from cliente LIMIT 0, limite;
	SELECT * from cliente where first_name = nome;
    
END$$ 
DELIMITER ;

call exemplo;
drop procedure exemplo

--    SELECT * from cliente where first_name = nome;
