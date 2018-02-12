<link rel="stylesheet" href="nevek.css">
<?php
if($_GET["neme"]==1)
{
    $melyik='csajos';
    $honnan='nosiruet.png';
}
else
{
     $melyik='pasis';
    $honnan='ferfi.png';
}
echo"<div class=$melyik>","<img src='$honnan'>",$_GET['neve'],"</div>";
?>