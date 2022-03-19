DROP TRIGGER IF EXISTS afterdelete;

DELIMITER $$
CREATE TRIGGER afterdelete
 AFTER DELETE
 ON cliente
 FOR EACH ROW
 BEGIN
	SET @contadorAfterDelete = @contadorAfterDelete + 1;
 END$$
 DELIMITER ;