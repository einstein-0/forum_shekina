<?php
session_start();
require("Actions/databases.php");
if(isset($_GET["id"]) && !empty($_GET["id"]))
{
    $idOfquestion = $_GET["id"];
    $checkQuestionexist = $conn->prepare("SELECT * FROM questions where id=?");
    $checkQuestionexist->execute([$idOfquestion]);
    if($checkQuestionexist->rowCount()>0)
    {
        $questioninfo = $checkQuestionexist->fetch();
        if($questioninfo["id_auteur"] == $_SESSION["id"])
        {
                $title_question = $questioninfo["title"];
                $descript_question = $questioninfo["description"];
                $content_question = $questioninfo["content"];
                $date_publication = $questioninfo["date_publication"];
                $descript_question = str_replace("<br />", "", $descript_question);
                $content_question = str_replace("<br />", "", $content_question);
        }
        else{
            $errormsg="vous etes pas l'auteur de cette question";
        }
    }
    else{
        $errormsg = "aucune question n'a ete trouve";
    }

}else{
    $errormsg = "aucune question n'a ete trouver";
}