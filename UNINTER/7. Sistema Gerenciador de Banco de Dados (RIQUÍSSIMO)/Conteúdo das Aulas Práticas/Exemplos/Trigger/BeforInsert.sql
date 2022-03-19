
DROP TRIGGER IF EXISTS beforeinsert;

DELIMITER $$
CREATE TRIGGER beforeinsert
 BEFORE INSERT
 ON cliente
 FOR EACH ROW
 BEGIN
	SET @contadorBeforeInsert = @contadorBeforeInsert + 1;
 END$$
 DELIMITER ;