
DELIMITER $$
CREATE PROCEDURE exemplo01() 
BEGIN
	SELECT * from cliente;
END$$
DELIMITER ;

call exemplo01;

drop PROCEDURE exemplo01;































