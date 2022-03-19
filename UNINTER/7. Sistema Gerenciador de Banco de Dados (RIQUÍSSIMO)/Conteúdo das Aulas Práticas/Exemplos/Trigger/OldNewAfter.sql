DROP TRIGGER IF EXISTS OldNewAfter;

DELIMITER $$
CREATE TRIGGER OldNewAfter
 AFTER UPDATE
 ON cliente
 FOR EACH ROW
 BEGIN
	SET @oldTOTALAfter = old.total;
    SET @newTOTALAfter = new.total;
    
 END$$
 DELIMITER ;