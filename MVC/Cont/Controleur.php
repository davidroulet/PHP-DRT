<?php
/**
 * Cartouch
 * Nom du fichier Controleur.php
 * Createur David.ROULET
 * Date 20.12.2019
 * IDE PhpStorm
 * Nom du Projet PHP
 */
function ShowC(){
    require_once ("Model/Conecerts.php");


for ($i=0;$i<count($concerts);$i++){

    if($concerts[$i]["date"]< date("Y-m-d"))
        unset($concerts[$i]);
}

require_once ("Concert.php");
}
function ShowF(){
    require_once ("Model/Films.php");
    require_once ("Mouvies.php");
}