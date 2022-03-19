-- PARAMETRO INOUT
DROP procedure IF EXISTS `exemplo`;

DELIMITER $$ 
CREATE PROCEDURE exemplo(INOUT total NUMERIC) 
BEGIN 
       
    SELECT sum(consumo.quantidade) into total from consumo where consumo.idcliente = total;
        
END$$ 
DELIMITER ;

SET @TOTAL = 28;
call exemplo(@TOTAL);
SELECT @TOTAL as 'TOTAL QUANTIDADE CONSUMO';