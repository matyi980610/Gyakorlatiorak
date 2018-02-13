<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nézzük</title>
    <link href="get.css" rel='stylesheet' type='text/css'>
</head>
<body>
   

<div class='kat'> 
<?php echo " Kategória:" . $_GET['kat']; ?>
</div>
<div class='nev'> 
<?php echo "Név:" . $_GET['nev']; ?> 
</div>
<div class='leiras'>
<?php echo "Leírás:". $_GET['leiras']; ?>
</div>

    
</body>
</html>