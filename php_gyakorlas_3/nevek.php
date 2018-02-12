<link rel="stylesheet" href="nevek.css">
<?php
if($_GET["neme"]==1)
{
    echo"<div class='csajos'>",$_GET['neve'],"</div>";
}
else
{
     echo"<div class='pasis'>",$_GET['neve'],"</div>";
}
?>