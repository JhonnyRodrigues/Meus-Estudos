DROP procedure IF EXISTS `exemplo`;

DELIMITER $$
CREATE PROCEDURE `exemplo` (INOUT total NUMERIC, out registros INT)
BEGIN
	  
	select count(*) into registros FROM consumo Where consumo.idcliente = total;
	
    
    select sum(consumo.quantidade) into total FROM consumo Where consumo.idcliente = total;
    
END$$
DELIMITER ;

SET @total_consumido = 2206;
call exemplo(@total_consumido, @reg);
SELECT @total_consumido as 'TOTAL CONSUMIDO', @reg as 'REGISTROS';


