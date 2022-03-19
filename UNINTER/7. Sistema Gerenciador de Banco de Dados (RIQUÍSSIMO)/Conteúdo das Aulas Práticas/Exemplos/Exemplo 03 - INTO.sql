DROP procedure IF EXISTS `exemplo`;

DELIMITER $$
CREATE PROCEDURE `exemplo` ()
BEGIN
	DECLARE limite INT DEFAULT 1;
    DECLARE nome varchar(50);
    
	select first_name into nome FROM cliente WHERE id = limite;
    
    select * FROM cliente WHERE first_name = nome;
    
END$$
DELIMITER ;

call exemplo;
