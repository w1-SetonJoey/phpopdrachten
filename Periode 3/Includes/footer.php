<?php include 'variabelen.php'; ?>
<link href="Opdracht33.css" rel="stylesheet" type="text/css">
<?php


/*Formaat selectie */
$uur = date("H");
/* Hier word de tijdzone geselecteerd */
$timezone = date("e");
if ($uur < "12") {
    echo "Goedemorgen";
} else
    if ($uur >= "12" && $uur < "17") {
        echo "Goedemiddag";
    } else
        if ($uur >= "17" && $uur < "19") {
            echo "Goedeavond";
        } else
            if ($uur >= "19") {
                echo "Goedenacht";
            }





echo "<footer> copyright $name $year</footer>";
echo "</body></html>";