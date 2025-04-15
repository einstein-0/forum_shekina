<?php
require("Actions/databases.php");

if(isset($_GET["id"]) && !empty($_GET["id"]))
{
    $idOfQuestion = $_GET["id"];
    $checkIfquestionExist = $conn->prepare("SELECT * FROM questions WHERE id=?");
    $checkIfquestionExist->execute([$idOfQuestion]);
    //voir si l'id existe ou question exist
    if($checkIfquestionExist->rowCount()>0)
    {
        //recuperer les data dela question dans un tableau
        $questionInfos=$checkIfquestionExist->fetch();
        //stocker les datas de la question dans une variable
        $title_question = $questionInfos["title"];
        $descript_question = $questionInfos["description"];
        $content_question = $questionInfos["content"];
        $id_auteur = $questionInfos["id_auteur"];
        $pseudo_auteur = $questionInfos["pseudo_auteur"];
        $date_publication = $questionInfos["date_publication"];
    }
    else{
        $errormsg = "Aucune question n'a été trouver";
    }

}
else{
    $errormsg =  "Aucune question n'a été trouver";
}

?>