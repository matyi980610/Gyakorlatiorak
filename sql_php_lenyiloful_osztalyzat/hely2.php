<?php
include('php_proto.php');
$id = $_GET['telep'];
//echo $id;

$sql="
SELECT nev 
FROM tagok
WHERE telep = $id
";

$eredmeny = mysqli_query($kapcs, $sql);

while($sor = mysqli_fetch_array($eredmeny))
{
    echo $sor['nev'], "<br>";
}


?>