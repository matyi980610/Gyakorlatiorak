<?php
//session_destroy();
session_start();
echo session_id();
$_SESSION['alfa']= 'alfa';
$_SESSION['béta']= 'beta';
$_SESSION['gamma'] = 999;
echo "<br>";
echo "<br>";

//echo $_SESSION['alfa'];
//break;
//echo $_SESSION['alfa']= 'alfa';
//break;
//echo $_SESSION['béta']= 'beta';
//break;
//echo $_SESSION['gamma'] = 999;
//break;
//print_r($_SESSION);

$_SESSION['adatok'] = $_GET['adatok'];
echo $_SESSION['adatok'];
?>