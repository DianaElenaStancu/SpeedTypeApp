<?php
/*

Cum am creat baza de date:

create table if not exists citate
(
	id int auto_increment
		primary key,
	text varchar(500) null
);


INSERT INTO atestat.citate (id, text) VALUES (1, 'No in he real went find mr. Wandered or strictly raillery stanhill as. Jennings appetite disposed me an at subjects an. To no indulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week.');
INSERT INTO atestat.citate (id, text) VALUES (2, 'Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now how nay cold real case. ');
INSERT INTO atestat.citate (id, text) VALUES (3, 'On then sake home is am leaf. Of suspicion do departure at extremely he believing. Do know said mind do rent they oh hope of. General enquire picture letters garrets on offices of no on. ');
INSERT INTO atestat.citate (id, text) VALUES (4, 'Say one hearing between excited evening all inhabit thought you. Style begin mr heard by in music tried do. To unreserved projection no introduced invitation.');
INSERT INTO atestat.citate (id, text) VALUES (5, 'da da');
INSERT INTO atestat.citate (id, text) VALUES (6, 'da da da');
*/

//creez variabila de conectare care contine urmatoarele campuri: numele hostului, numele adminului, parola admin, numele baza de date
    $conectare = mysqli_connect("localhost", "root", "", "atestat");
//daca exista o eroare se afiseaza eroarea
    if (!$conectare) {
        echo "EROARE!" . '</br>';
        die(mysqli_connect_error());
    }
//selectarea random a unui citat
    $query = "SELECT text FROM citate ORDER BY RAND() LIMIT 1";
    $var = mysqli_query($conectare, $query);
    $result = mysqli_fetch_object($var);

?>
