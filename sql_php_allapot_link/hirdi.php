<?php
include('php_proto.php');
$kat =$_GET['kat'];
//echo $id;

$sql="
SELECT *
FROM hirdi
Where id = $kat

";

$eredmeny = mysqli_query($kapcs, $sql);

$sor = mysqli_fetch_array($eredmeny);

    echo $sor['id'];
    echo "<br> <br>";
    echo $sor['cim'];
    echo "<br> <br>";
    echo $sor['leiras'];
    echo "<br> <br>";
    



?>