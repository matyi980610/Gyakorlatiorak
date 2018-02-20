<?php
include('php_proto.php');

$ho = $_GET['ho'];

if($ho <= 0)
    {
        $sql="
        SELECT halmaz 
        FROM viz
        WHERE fok = 0
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);

        $sor = mysqli_fetch_array($eredmeny);

        echo $sor['halmaz'];
    }
else
{
    if($ho<=100)
    {
        $sql="
        SELECT halmaz 
        FROM viz
        WHERE fok = 100
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);

        $sor = mysqli_fetch_array($eredmeny);
        echo $sor['halmaz'];
        
    }
    else
    {
        $sql="
        SELECT halmaz 
        FROM viz
        WHERE fok = 101
        ";
    
        $eredmeny = mysqli_query($kapcs, $sql);

        $sor = mysqli_fetch_array($eredmeny);
        echo $sor['halmaz'];
    }
}
?>


