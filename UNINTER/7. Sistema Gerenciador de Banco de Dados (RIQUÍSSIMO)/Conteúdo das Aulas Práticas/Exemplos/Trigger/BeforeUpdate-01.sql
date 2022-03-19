DROP TRIGGER IF EXISTS beforeupdate;

DELIMITER $$
CREATE TRIGGER beforeupdate
 BEFORE UPDATE 
 ON cliente
 FOR EACH ROW
 BEGIN
	DECLARE passou VARCHAR(100);
    SELECT @rastro INTO passou;
    SET @rastro = concat_ws(':', passou, "beforeupdate");
 
	SET @contadorBeforUpdate = @contadorBeforUpdate + 1;
 END$$
 DELIMITER ;