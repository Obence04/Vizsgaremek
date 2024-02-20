-- létrehoz egy eljárást, ami hozzáadja a paraméterként megadott tantárgyat a tantárgyakhoz, ha az még nincs benne
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `tantargy_feltolt`(IN `tantargy` VARCHAR(45))
INSERT INTO tantargyak (megnevezes)
SELECT tantargy WHERE (SELECT count(megnevezes) FROM tantargyak WHERE tantargy = megnevezes) = 0$$
DELIMITER ;