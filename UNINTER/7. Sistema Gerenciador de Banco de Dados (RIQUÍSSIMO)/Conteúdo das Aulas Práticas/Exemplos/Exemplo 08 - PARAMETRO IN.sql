DROP procedure IF EXISTS `exemplo`;

DELIMITER $$
CREATE PROCEDURE `exemplo` (IN id INT)
BEGIN
    
	select * FROM consumo Where consumo.idcliente = id;
    
END$$
DELIMITER ;

call exemplo(2206);


