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

$szakma = $_GET['szakma'];
$sql = "SELECT * FROM szak
WHERE szakma = '$szakma'";

$eredmeny =mysqli_query($kapcs,$sql);
if($sor=mysqli_fetch_array($eredmeny))
{
    echo $sor['szakma'],"-ként belépve rendelkezésre álló pontok: ", $sor['pont']," -pont";
}
else
{
    echo "Nincs ilyenszakma";
}
?>