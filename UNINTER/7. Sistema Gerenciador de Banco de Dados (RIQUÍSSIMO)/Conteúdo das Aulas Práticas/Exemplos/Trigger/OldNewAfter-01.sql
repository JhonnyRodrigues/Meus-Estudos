DROP TRIGGER IF EXISTS OldNewAfter;

DELIMITER $$
CREATE TRIGGER OldNewAfter
 AFTER UPDATE
 ON cliente
 FOR EACH ROW
 BEGIN
 
 DECLARE passou VARCHAR(100);
    SELECT @rastro INTO passou;
    SET @rastro = concat_ws(':', passou, "OldNewAfter");
	SET @contadorAfterUpdate = @contadorAfterUpdate + 1;
    
    
	SET @oldTOTALAfter = old.total;
    SET @newTOTALAfter = new.total;
    
 END$$
 DELIMITER ;