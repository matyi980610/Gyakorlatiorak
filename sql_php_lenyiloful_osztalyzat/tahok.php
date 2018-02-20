<?php
include('php_proto.php');

$sql="
        SELECT *
        FROM tagok
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);

 echo "<select>";

        while($sor = mysqli_fetch_array($eredmeny))
        {
            echo "<option value=",$sor['jelszo'], ">",
            $sor['nev'];
            
        }
echo "</select>";
?>