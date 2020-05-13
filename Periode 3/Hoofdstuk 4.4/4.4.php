<!--/**-->
<!--* User: Joey Seton-->
<!--* File: opdracht4.4.php-->
<!--*/-->

<h1>Weekkalender komende week:</h1>
<?php
$eendatum = date('d-m-Y', strtotime("0 days"));
$eenweek = date('w', strtotime("0 days"));

$dagNamen = array("zondag", "maandag" ,"dinsdag" ,"woensdag", "donderdag",
    "vrijdag", "zaterdag");

// Hier staat een var/forloop
for ($eendatum = 0; $eendatum <7 ; $eendatum++)
{
    $eenweek = strtotime("+$eendatum days");
    echo "<br>";
    echo date('d-m-Y', $eenweek);
    echo " en dit is dag ";
    echo $idxweek = date('w', $eenweek);
    echo " in deze week ".$dagNamen[$idxweek];;
}

