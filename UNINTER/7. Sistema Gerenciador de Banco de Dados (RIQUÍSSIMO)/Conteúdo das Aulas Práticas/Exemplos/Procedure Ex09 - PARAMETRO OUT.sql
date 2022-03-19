-- PARAMETRO OUT
DROP procedure IF EXISTS `exemplo`;

DELIMITER $$ 
CREATE PROCEDURE exemplo(IN id INT, OUT total NUMERIC) 
BEGIN 
       
    SELECT sum(consumo.quantidade) into total from consumo where consumo.idcliente = id;
        
END$$ 
DELIMITER ;

call exemplo(28, @TOTAL);
SELECT @TOTAL as 'TOTAL QUANTIDADE CONSUMO';