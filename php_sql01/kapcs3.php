<?php

$host = "mysql.hostinger.hu";
$user = "u466192019_mityu";
$pass = "szilva";

$kapcs = mysqli_connect(
$host, $user, $pass
) OR die('Nem sikerült a kapcsi, more!');

//if () {} else {}

mysqli_select_db($kapcs, "u466192019_mityu")
OR die('Nem sikerült kiválasztani az adatbázist!');

$sql=
//"SELECT count(*) AS darab 
"SELECT count(*) As darab
FROM hely
WHERE varos < 'B'";
//WHERE nev = 'Eniko'
$eredmeny=mysqli_query($kapcs,$sql);

//var_dump($eredmeny);

while($sor = mysqli_fetch_array($eredmeny))
{
    echo $sor['darab'];
//   echo "<br><br>";
//    echo $sor['jelszo'];
//    echo "<br>================================================================<br>";
}

//var_dump($sor);


?>










