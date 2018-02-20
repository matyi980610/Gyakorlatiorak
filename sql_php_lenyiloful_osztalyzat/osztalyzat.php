<?php
include('php_proto.php');

$sql="
        SELECT *
        FROM jegy
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);

 echo "<select>";

        while($sor = mysqli_fetch_array($eredmeny))
        {
            echo "<option value=",$sor['oszt'], ">",
            $sor['ertekeles'];
            
        }
echo "</select>";
        
?>