<?php
       session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kosár</title>
    <link rel="stylesheet" href="kosar.css">
</head>
<body>
   <div class="ikon"></div>
   <br>
   <br>
   <div class="kosar">
       <?php
       if ($_GET['torol']==1)
            {
            session_destroy();
            $_SESSION = array();
            }
        else
            {
            $_SESSION['kosar'].="- ".$_GET['kosar'] . "<br>";
            }
       
        echo "kosárban: <br>", $_SESSION['kosar'];
      ?>
   </div>
   <a href="kosar.html">Vissza az áruházba</a>;
    <a href="?torol=1">Kosár törlése!</a>
</body>
    
</html>
