<?php
include('php_proto.php');
 
$sql="
        SELECT *
        FROM allapot
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);

        while($sor = mysqli_fetch_array($eredmeny))
        {
            echo "<a href='allapot2.php?all=", $sor['id'], "'>", $sor['nev'], "</a> <br>";
        }
?>