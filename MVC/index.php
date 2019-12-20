<?php
require_once "Cont/Controleur.php";
if(isset($_GET["action"])){
    $action=$_GET["action"];
}else{
    $action="Home";
}
switch ($action){
    case"Mouvies":
        $Titre="Films";
        ShowF();
        $Contenu;
        break;
    case"Concert":
        $Titre="Films";
        ShowC();
        $Contenu;
        break;
    default:
        $Titre="Home";
        require_once "Home.php";
        $Contenu;
        break;
}

?>
