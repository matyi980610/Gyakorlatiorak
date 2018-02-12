<link rel="stylesheet" href="nevek.css">
<?php
if($_GET["nev"]=="Gyula")
{
    if($_GET["jelszo"]=="Szilva")
    {
        echo "<div class=''belepve'> Belépve: ", $_GET['nev'],"</div>";
    }
    else
    {
        echo "<div class='hiba'>Hiba a bejelentkezésben: Rossz felhasználónév vagy jelszó.<a href='bejelentkezes.html'>Vissza a bejelentkezéshez</a></div>";
    }
}
else
{
    if($_GET["nev"]=="Viki")
    {
        if($_GET["jelszo"]=="Mese")
            {
                echo "<div class=belepve> Belépve: ", $_GET['nev'],"</div>";
            }
        else
    {
        echo "<div class='hiba'>Hiba a bejelentkezésben: Rossz felhasználónév vagy jelszó.<a href='bejelentkezes.html'>Vissza a bejelentkezéshez</a></div>";
    }
    }
    else
    {
        echo "<div class='hiba'>Hiba a bejelentkezésben: Rossz felhasználónév vagy jelszó.<a href='bejelentkezes.html'>Vissza a bejelentkezéshez</a></div>";
    }
}