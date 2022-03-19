-- PARAMETRO IN
DROP procedure IF EXISTS `exemplo`;

DELIMITER $$ 
CREATE PROCEDURE exemplo(IN id INT) 
BEGIN 
       
    SELECT * from cliente where cliente.id = id;
        
END$$ 
DELIMITER ;

call exemplo(20);