<?php
include('php_proto.php');
$minta =$_GET['minta'];
//echo $id;

$sql="
SELECT *
FROM hirdi
Where cim like '%$minta%'
or leiras like '%$minta%'

";

$eredmeny = mysqli_query($kapcs, $sql);

while($sor = mysqli_fetch_array($eredmeny))
{
    echo $sor['id'];
    echo "<br> <br>";
    echo $sor['cim'];
    echo "<br> <br>";
    echo $sor['leiras'];
    echo "<br> <br>";
}
    



?>