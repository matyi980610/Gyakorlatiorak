<link rel="stylesheet" href="szorzas.css">
<div class="eredmeny">Szorzó:
    <?php
    echo $_GET["szorzo"]
    ?>
</div>
<div class="eredmeny">Szorzandó:
    <?php
        echo $_GET["szorzando"]
    ?>
</div>
<div class="eredmeny">Eredmény:
    <?php
        echo $_GET["szorzo"]*$_GET["szorzando"]
    ?>
</div>