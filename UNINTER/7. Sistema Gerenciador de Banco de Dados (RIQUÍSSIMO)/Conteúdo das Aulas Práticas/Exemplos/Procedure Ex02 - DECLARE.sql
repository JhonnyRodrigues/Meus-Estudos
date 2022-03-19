
DELIMITER $$ 
CREATE PROCEDURE exemplo02() 
BEGIN 
	DECLARE limite int DEFAULT 1;
	SELECT * from cliente LIMIT 0, limite;
END$$ 
DELIMITER ;

call exemplo02;
drop PROCEDURE exemplo02;