<?php
       session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Órarend</title>
    <link rel="stylesheet" type="text/css" href="orarend.css">
</head>
<body>
   <div class="orarend">Az Órarendem</div>
   <br>
   <br>
   <div class="orak">
       <?php
       if ($_GET['torol']==1)
            {
            session_destroy();
            $_SESSION = array();
            }
        else
            {
            $_SESSION['orarend'].=$_GET['matek'] . "<br>";
            $_SESSION['orarend'].=$_GET['torna'] . "<br>";
            $_SESSION['orarend'].=$_GET['fizika'] . "<br>";
            $_SESSION['orarend'].=$_GET['biosz'] . "<br>";
            }
       
        echo $_SESSION['orarend'];
      ?>
   </div>
   <a href="orarend.html">Vissza az Órarendkiválasztáshoz</a>;
    <a href="?torol=1">Órarend törlése!</a>
</body>
    
</html>
