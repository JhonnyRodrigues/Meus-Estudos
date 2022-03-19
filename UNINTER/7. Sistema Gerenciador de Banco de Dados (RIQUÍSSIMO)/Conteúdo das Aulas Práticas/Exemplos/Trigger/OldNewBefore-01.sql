DROP TRIGGER IF EXISTS OldNewBefore;

DELIMITER $$
CREATE TRIGGER OldNewBefore
 BEFORE UPDATE
 ON cliente
 FOR EACH ROW
 BEGIN
 DECLARE passou VARCHAR(100);
    SELECT @rastro INTO passou;
    SET @rastro = concat_ws(':', passou, "OldNewBefore");
	SET @oldTOTALBefore = old.total;
    SET @newTOTALBefore = new.total;
    
 END$$
 DELIMITER ;