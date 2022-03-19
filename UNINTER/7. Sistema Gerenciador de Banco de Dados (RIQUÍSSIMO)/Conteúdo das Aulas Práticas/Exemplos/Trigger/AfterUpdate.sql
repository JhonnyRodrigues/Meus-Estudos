DROP TRIGGER IF EXISTS afterupdate;

DELIMITER $$
CREATE TRIGGER afterupdate
 AFTER UPDATE 
 ON cliente
 FOR EACH ROW
 BEGIN
	SET @contadorAfterUpdate = @contadorAfterUpdate + 1;
 END$$
 DELIMITER ;