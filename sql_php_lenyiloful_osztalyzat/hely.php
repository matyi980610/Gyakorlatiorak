<?php
include('php_proto.php');
 
$sql="
        SELECT *
        FROM hely
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);
echo   "<form action='hely2.php'>";
 echo "<select name='telep'>";

        while($sor = mysqli_fetch_array($eredmeny))
        {
            echo "<option value=",$sor['id'], ">",
            $sor['varos'];
            
        }
echo "</select>";
echo "<input type='submit' name='Küldes' value='Nézzük' >";
echo "</form>";
?>