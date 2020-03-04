<!DOCTYPE html>
<html>
<?php
/*
 * User: Joey Seton
 * Date: 17/02/2020
 * Time: 14:00 PM
 * File: opdracht3.1.php
 */
?>
<head>
    <title>
        Opdracht 3.1 PHP
    </title>
</head>
<body>
<header>
    <h1> <a href="../index.php">Back</a></h1>
</header>
<?php
$evenement = "Elfstedentocht";
$fries = "Alvestêdetocht";
$lengte = 200;
$activiteit = "schaatstocht";
$typeijs = "natuurijs";
$organisator = "Koninklijke Vereniging De Friesche Elf Steden";
$stad = "Leeuwarden";
$provincie = "Friesland";
$aantal = 15;
$eerste = 1909;
$maximaal = 1;
$br = "<br>";

$verhaal = "De $evenement (Fries: $fries) is een $lengte kilometer$br lange $activiteit over $typeijs die wordt georganiseerd door $br
de $organisator $stad,$br de hoofdstad van $provincie, is start- en aankomstplaats. De $br 
$evenement is inmiddels $aantal maal verreden en werd voor het $br eerst in $eerste gereden en wordt maximaal $maximaal keer per winter$br
gehouden";

echo "<p>$verhaal </p>";
?>
<?php


?>
</body>
</html>

