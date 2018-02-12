<link rel="stylesheet" href="veznev.css">
<div class="eredmeny">Vezetékneved:
    <?php
    echo $_GET["szorzo"]
    ?>
</div>
<div class="eredmeny">Keresztneved:
    <?php
        echo $_GET["szorzando"]
    ?>
</div>
<div class="eredmeny">Eredmény:
    <?php
        echo $_GET["szorzo"] ," ", $_GET["szorzando"]
    ?>
</div>