
DROP TRIGGER IF EXISTS afterinsert;

DELIMITER $$
CREATE TRIGGER afterinsert
 after INSERT
 ON cliente
 FOR EACH ROW
 BEGIN
	SET @contadorAfterInsert = @contadorAfterInsert + 1;
 END$$
 DELIMITER ;