DROP procedure IF EXISTS `exemplo`;

DELIMITER $$
CREATE PROCEDURE `exemplo` (IN id INT, OUT total NUMERIC)
BEGIN
    
	select sum(consumo.quantidade) into total FROM consumo Where consumo.idcliente = id;
    
END$$
DELIMITER ;

call exemplo(2206, @total_consumido);
SELECT @total_consumido;


