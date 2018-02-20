<div id="a"></div>
<link rel="stylesheet" href="kategoria_keres.css">
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<?php
include('php_proto.php');
$minta =$_GET['minta'];
//echo $id;
$count="
SELECT count(*) as db
FROM kategoria
Where nev like '%$minta%'
or leiras like '%$minta%'

";

$eredmeny2 = mysqli_query($kapcs, $count);

$sor2 = mysqli_fetch_array($eredmeny2);
echo "<div class='talalat'>";
echo " Nagyjából ";
echo  $sor2['db'];
echo " találat";
echo "</div>";
$sql="
SELECT *
FROM kategoria
Where nev like '%$minta%'
or leiras like '%$minta%'

";

$eredmeny = mysqli_query($kapcs, $sql);

while($sor = mysqli_fetch_array($eredmeny))
{
    echo "<div class='nagy'>";
    
    echo "<div class='in' id='a'>";
    echo "Azonosító: ";
    echo $sor['id'];
    echo "</div>";
    
    echo "<div class='kep'>";
    echo "<img src='";
    echo $sor['pik'];
    echo "'>";
    echo "</div>";
        
     echo "<div class='in'>";
    echo "Név: ";
    echo $sor['nev'];
    echo "</div>";
    
    echo "</div>";
    
     echo "<div class='le'>";
    echo "Leírás: ";
    echo $sor['leiras'];
    echo "</div>";
    
    
        
    echo "<div class='szunet'>";
    echo "</div>";
}
    



?>