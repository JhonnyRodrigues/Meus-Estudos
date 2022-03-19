DROP TRIGGER IF EXISTS OldNewBefore;

DELIMITER $$
CREATE TRIGGER OldNewBefore
 BEFORE UPDATE
 ON cliente
 FOR EACH ROW
 BEGIN
	SET @oldTOTALBefore = old.total;
    SET @newTOTALBefore = new.total;
    
 END$$
 DELIMITER ;