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
<h1>Liste de Concert</h1>

<a href='?action=Mouvies'>Films</a>
<a href='?action=Concert'>Concert</a>
<a href='?action=Home'>Home</a>
<ul>
    <?php
    foreach ($concerts as $concert){
        echo"<li>".$concert["band"]." le ".$concert["date"]."</li>";
    }
    ?>
</ul>
<?php
$Contenu=ob_get_clean();
        require_once "gabarit.php";
?>

