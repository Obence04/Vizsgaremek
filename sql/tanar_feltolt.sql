-- létrehoz egy eljárást, ami hozzáadja a paraméterként megadott tanárt a tanárokhoz, ha az még nincs benne
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `tanar_feltolt`(IN `tanar` VARCHAR(45))
INSERT INTO tanarok (nev)
SELECT tanar WHERE (SELECT count(nev) FROM tanarok WHERE tanar = nev) = 0$$
DELIMITER ;