<?php
include('php_proto.php');


$sql="
SELECT *
FROM kategoria
";

$eredmeny = mysqli_query($kapcs, $sql);
echo   "<form action=fogado3.php>";
echo   "<select name=kat>";

while($sor = mysqli_fetch_array($eredmeny))
{
    
    echo"<option value=";
    echo $sor['id'];
    echo ">";
    echo $sor['nev'];
}
echo   "</select>";
echo   "<input type=submit>";
echo   "</form>";




?>