<?php
include('php_proto.php');
$all = $_GET['all'];
//echo $id;

$sql="
SELECT nev 
FROM allapot
WHERE id = $all
";

$eredmeny = mysqli_query($kapcs, $sql);

while($sor = mysqli_fetch_array($eredmeny))
{
    echo $sor['nev'], "<br>";
}


?>