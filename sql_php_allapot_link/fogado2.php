<?php
include('php_proto.php');
$all = $_GET['all'];
//echo $id;

$sql="
SELECT *
FROM kategoria
";

$eredmeny = mysqli_query($kapcs, $sql);

$sor = mysqli_fetch_array($eredmeny);

    echo $sor['nev'], "<br>";
    echo "<br> <br>";
    echo "<select>";
    echo "<option>", $sor['nev'];
    echo "</select>";
    echo "<br> <br>";
    echo "<a href='?id=", $sor['id'], "'>", $sor['nev'], "</a>"; 
    



?>