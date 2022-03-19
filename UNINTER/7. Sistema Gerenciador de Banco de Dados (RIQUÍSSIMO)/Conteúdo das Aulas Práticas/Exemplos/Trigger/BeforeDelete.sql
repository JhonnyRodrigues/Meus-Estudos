DROP TRIGGER IF EXISTS beforedelete;

DELIMITER $$
CREATE TRIGGER beforedelete
 BEFORE DELETE
 ON cliente
 FOR EACH ROW
 BEGIN
	SET @contadorBeforeDelete = @contadorBeforeDelete + 1;
 END$$
 DELIMITER ;