SET @contadorBeforeInsert = 0;
SET @contadorAfterInsert = 0;
SET @contadorBeforUpdate = 0;
SET @contadorAfterUpdate = 0;
SET @contadorBeforeDelete = 0;
SET @contadorAfterDelete = 0;

SELECT @contadorBeforeInsert, @contadorAfterInsert, @contadorBeforUpdate, @contadorAfterUpdate, @contadorBeforeDelete, @contadorAfterDelete;

INSERT INTO `aula`.`cliente`VALUES (0, 'AA','BB','AA@BB','Male', null, null),(0, 'BB','CC','BB@CC','Male', null, null);
UPDATE `aula`.`cliente` SET `total` = 20 WHERE `id` = 1;
DELETE from cliente WHERE total is null;


SET @usuario = null;
SET @data = NULL;
SET @hora = NULL;

SELECT @usuario, @data, @hora;


-- UPDATE OLD, NEW
-- INSERT NEW
-- DELETE OLD

SET @oldTOTAL = 0;
SET @newTOTAL = 0;
SET @oldTOTALBefore = 0;
SET @newTOTALBefore = 0;

UPDATE `aula`.`cliente` SET `total` = 150 WHERE `id` = 1;

SELECT @oldTOTAL, @newTOTAL, @oldTOTALBefore, @newTOTALBefore;


SET @rastro = "passou por";
SELECT @rastro;










