<?php
include('php_proto.php');
$jegy = $_GET['jegy'];

$sql="
        SELECT ertekeles 
        FROM jegy
        WHERE oszt = $jegy
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);

        $sor = mysqli_fetch_array($eredmeny);

        echo $sor['ertekeles'];
?>