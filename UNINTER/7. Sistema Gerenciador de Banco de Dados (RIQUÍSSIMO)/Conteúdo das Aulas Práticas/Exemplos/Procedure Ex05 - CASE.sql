-- CASE
DROP procedure IF EXISTS `exemplo`;

DELIMITER $$ 
CREATE PROCEDURE exemplo() 
BEGIN 
	DECLARE id int DEFAULT 1;
    DECLARE quantidade int;
	SELECT CHAR_LENGTH(first_name) INTO quantidade FROM cliente WHERE cliente.id = id;

    
    CASE quantidade
		WHEN 0 THEN 
			SELECT "ZERO";
		WHEN 1 THEN 
			SELECT "UM";
		WHEN 2 THEN 
			SELECT "DOIS";
		WHEN 3 THEN 
			SELECT "TRÊS";
		WHEN 4 THEN 
			SELECT "QUATRO";
		WHEN 5 THEN 
			SELECT "CINCO";
		WHEN 6 THEN 
			SELECT "SEIS";
		WHEN 7 THEN 
			SELECT "SET";
		ELSE
			SELECT "MAIOR QUE SETE";
	END CASE;

    
END$$ 
DELIMITER ;

call exemplo;