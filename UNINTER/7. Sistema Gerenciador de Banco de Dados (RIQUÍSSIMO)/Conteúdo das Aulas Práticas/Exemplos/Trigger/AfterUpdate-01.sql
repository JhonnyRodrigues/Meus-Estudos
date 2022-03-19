DROP TRIGGER IF EXISTS afterupdate;
DELIMITER $$
CREATE TRIGGER afterupdate
 AFTER UPDATE 
 ON cliente
 FOR EACH ROW
 BEGIN
 DECLARE passou VARCHAR(100);
    SELECT @rastro INTO passou;
    SET @rastro = concat_ws(':', passou, "afterupdate");
	SET @contadorAfterUpdate = @contadorAfterUpdate + 1;
 END$$
 DELIMITER ;