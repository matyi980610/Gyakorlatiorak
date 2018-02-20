<?php
include('php_proto.php');

$sql="
        SELECT *
        FROM viz
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);

        while($sor = mysqli_fetch_array($eredmeny))
        {
            echo $sor['halmaz'];
            echo $sor['fok'];
            
            
        }

        
?>