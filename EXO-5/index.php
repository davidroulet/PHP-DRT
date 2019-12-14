<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"My Title"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
//David roulet
//14 12 19
// Calendier
$Listdesjours = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samdi', 'Dimenche'); //jours de la semaine
$ListedesMois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mais', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); //Mois de l'annee
$AnneeTitre=$_GET[year];
$MoisQuerrySting=$_GET[month];
$DateSelect = mktime(0, 0, 0, $MoisQuerrySting, 1, $AnneeTitre);
$MoisTitre = $ListedesMois[$MoisQuerrySting - 1];
echo("

<div class=\"month\">
  <ul>
    <li>$MoisTitre<br>$AnneeTitre</li>
  </ul>
</div>
")
?>
<ul class="weekdays">
    <?php // Affiche la liste des jours
    for ($i = 0; $i != count($Listdesjours) + 1; $i++) {
        echo("<li>" . $Listdesjours[$i] . "</li>");
    }
    ?>
</ul>

<ul class="days">
    <?php

    for ($i = date("N", $DateSelect) - 1; $i != 0; $i--) { // Affichier les jours avant le mois accutel
        echo("<li><span class='Autre'>");
        echo(date("t", $DateSelect - 1) - ($i - 1));
        echo("</span></li>");
    }

    for ($i = 1; $i != date("t", $DateSelect) + 1; $i++) { // Affichier les jours du mois accutel
        if ($i - 1 == date("N") && date("F Y") == date("F Y", $DateSelect)) {
            echo("<li><span class='active'>$i</span></li>");
        } else {
            echo("<li>$i</li>");
        }
    }

    $JoursFin = 7 * 6 - date("t", $DateSelect) - date("N", $DateSelect) + 2; //affiche les jours aprais le mois acctel
    if ($JoursFin > 7) {
        $JoursFin = $JoursFin - 7;
    }
    for ($i = 1; $i != $JoursFin; $i++) {
        echo("<li><span class='Autre'>$i</span></li>");
    }
    ?>
</ul>
<br>
</body>
</html>