DROP procedure IF EXISTS `exemplo`;

DELIMITER $$
CREATE PROCEDURE `exemplo` ()
BEGIN
	select count(*) FROM cliente;
END$$
DELIMITER ;

call exemplo;