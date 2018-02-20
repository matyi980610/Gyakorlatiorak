<?php
include('php_proto.php');

$sql="
        SELECT *
        FROM viz
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);

 echo "<select>";

        while($sor = mysqli_fetch_array($eredmeny))
        {
            echo "<option value=",$sor['fok'], ">",
            $sor['halmaz'];
            
        }
echo "</select>";
?>