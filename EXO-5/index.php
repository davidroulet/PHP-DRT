<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"My Title"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$jour = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samdi', 'Dimenche');
$moi = array('Janvier', 'Février', 'Mars', 'Avril', 'Mais', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
$mois = mktime(0, 0, 0, $_GET[month], 1, $_GET[year]);
$tile = $moi[$_GET[month] - 1];
echo("

<div class=\"month\">
  <ul>
    <li>$tile<br>$_GET[year]</li>
  </ul>
</div>
")
?>
<ul class="weekdays">
    <?php
    for ($i = 0; $i != count($jour) + 1; $i++) {
        echo("<li>" . $jour[$i] . "</li>");
    }
    ?>
</ul>

<ul class="days">
    <?php

    for ($i = date("N", $mois) - 1; $i != 0; $i--) {
        echo("<li><span class='Autre'>");
        echo(date("t", $mois - 1) - ($i - 1));
        echo("</span></li>");
    }

    for ($i = 1; $i != date("t", $mois) + 1; $i++) {
        if ($i - 1 == date("N") && date("F Y") == date("F Y", $mois)) {
            echo("<li><span class='active'>$i</span></li>");
        } else {
            echo("<li>$i</li>");
        }
    }

    $LL = 7 * 6 - date("t", $mois) - date("N", $mois) + 2;

    if ($LL > 7) {
        $LL = $LL - 7;
    }
    for ($i = 1; $i != $LL; $i++) {
        echo("<li><span class='Autre'>$i</span></li>");
    }
    ?>
</ul>
<br>
</body>
</html>