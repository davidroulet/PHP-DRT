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
<h1>Liste des films</h1>
<a href='?action=Mouvies'>Films</a>
<a href='?action=Concert'>Concert</a>
<a href='?action=Home'>Home</a>
<table class="table table-striped table-dark">
    <tr>
        <th>Film</th>    <th>Audio</th>    <th>Temp</th>
    </tr>
<?php
foreach ($movies as $movie){
    echo"<tr>";
    echo"<th>".$movie["title"]."</th>";
    echo"<th>".$movie["audio"]."</th>";
    echo"<th>".$movie["showtime"]."</th>";
    echo"</tr>";
}
?>
</table>

<?php
$Contenu=ob_get_clean();
        require_once "gabarit.php";
?>

