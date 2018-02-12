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

$id = $_GET['id'];
$sql = "SELECT * FROM kategoria
WHERE id = '$id'";

$eredmeny =mysqli_query($kapcs,$sql);
if($id < 8)
{
    

if($sor=mysqli_fetch_array($eredmeny))
{
    echo $sor['id'],"-ra keresett rá ami a: <br>", $sor['nev'];
}
}
else
{
    echo '<a href="munkak.html">Rossz id próbáld újra</a>';
}
?>