
DROP TRIGGER IF EXISTS beforeupdate;

DELIMITER $$
CREATE TRIGGER beforeupdate
 BEFORE UPDATE 
 ON cliente
 FOR EACH ROW
 BEGIN
	SET @contadorBeforUpdate = @contadorBeforUpdate + 1;
 END$$
 DELIMITER ;