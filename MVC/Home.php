<?php
/**
 * Cartouch
 * Nom du fichier Home.php
 * Createur David.ROULET
 * Date 19.12.2019
 * IDE PhpStorm
 * Nom du Projet PHP
 */
ob_start();

?>
<div class="col-lg-12" style="text-align: center">
    <h1>Home</h1>
</div>
<div class="col-12">
    <a href='?action=Mouvies'><img class="col-5" src="images/movies.jpg"></a>
    <a href='?action=Concert'><img class="col-5" src="images/concerts.jpg"></a>
</div>
<?php
$Contenu=ob_get_clean();
        require_once "gabarit.php";
?>>

