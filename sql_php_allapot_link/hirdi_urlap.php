<?php
include('php_proto.php');


$sql="
SELECT *
FROM hirdi
";

$eredmeny = mysqli_query($kapcs, $sql);
echo   "<form action=hirdi.php>";
echo   "<select name=kat>";

while($sor = mysqli_fetch_array($eredmeny))
{
    
    echo"<option value=";
    echo $sor['id'];
    echo ">";
    echo $sor['cim'];
}
echo   "</select>";
echo   "<input type=submit>";
echo   "</form>";




?>