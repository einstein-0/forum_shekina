<?php
 require("Actions/databases.php");
 if(isset($_POST["click"]))
 {
    if(!empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["content"]) && !empty($_POST["password"]))
    {
        $title_question = htmlspecialchars($_POST["title"]);
        $descript_question = htmlspecialchars($_POST["description"]);
        $content_question = htmlspecialchars($_POST["content"]);
        $date_publication = date("d/m/Y H:i");
       $id_auteur =
        $pseudo_auteur = $_SESSION["pseudo"];
    }else
    {
        $errormsg ="veillez remplir les champs...";
    }
 }

?>