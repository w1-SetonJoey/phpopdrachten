<?php
include 'variabelen.php'; ?>

<footer>
    <?php

    $bezoeker = "";




    if (isset($_SESSION['username'])) {
        $bezoeker = $_SESSION['username']. "&nbsp;<a
href='../Hoofdstuk%206/6.1/loguit.php'>Loguit</a>";
    }
    else {
        $bezoeker = "onbekende bezoeker". "&nbsp;<a
href='../Hoofdstuk%206/6.1/opdracht61.php'>Login</a>";
    }
    echo $bezoeker.$year." ".$greeting;
    ?>
</footer>
</body>
</html>