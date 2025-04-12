<?php
session_start();
 require("Actions/databases.php");
 if(isset($_POST["click"]))
 {
    if(!empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["content"]))
    {
        $title_question = htmlspecialchars($_POST["title"]);
        $descript_question = nl2br($_POST["description"]);
        $content_question = nl2br($_POST["content"]);
        $date_publication = date("d/m/Y H:i");
        $id_auteur = $_SESSION["id"];
        $pseudo_auteur = $_SESSION["pseudo"];
        //insertion
        $insertuserOnWebsite = $conn->prepare("INSERT INTO questions(title, description, content, id_auteur, pseudo_auteur, date_publication) VALUES (?, ?, ?, ?, ?, ?)");
        $insertuserOnWebsite->execute([$title_question,  $descript_question,  $content_question,  $id_auteur,  $pseudo_auteur, $date_publication]); 
        $successmsg = "la question a ete bien publier";
    }else
    {
        $errormsg ="veillez remplir les champs...";
    }
 }

?>