DROP procedure IF EXISTS `exemplo`;

DELIMITER $$
CREATE PROCEDURE `exemplo` ()
BEGIN
	DECLARE limite INT DEFAULT 10;
    DECLARE quantidade INT;
    
	select  char_length(first_name) into quantidade FROM cliente WHERE id = limite;
    
   CASE quantidade
	WHEN 0 THEN
		SELECT 'ZERO';
	WHEN 1 THEN
		SELECT 'UM';
	WHEN 2 THEN
		SELECT 'DOIS';
	WHEN 3 THEN
		SELECT 'TRÊS';
	WHEN 4 THEN
		SELECT 'QUATRO';
	WHEN 5 THEN
		SELECT 'CINCO';
	WHEN 6 THEN
		SELECT 'SEIS';
	ELSE
		SELECT 'OUTRO VALOR - ' + quantidade;
   END CASE;
   
    
END$$
DELIMITER ;

call exemplo;
