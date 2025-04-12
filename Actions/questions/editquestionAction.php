<?php
require("Actions/databases.php");
if(isset($_POST["click"]))
{
    if(!empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["content"]))
    {
        $new_title_question = htmlspecialchars($_POST["title"]);
        $new_descript_question = nl2br(htmlspecialchars($_POST["description"]));
        $new_content_question = nl2br(htmlspecialchars($_POST["content"]));
        //modif mettrea jour les info de la question de l'id rentre en parametre
        $editquestionOnwebsite = $conn->prepare("UPDATE questions SET title=?, description=?, content=? WHERE id =?");
        $editquestionOnwebsite->execute([ $new_title_question, $new_descript_question, $new_content_question, $idOfquestion]);
        header("location:myQuestion.php ");
        
    }
    else{
        $errormsg = "veillez remplir vos  champs...";
    }
}




?>