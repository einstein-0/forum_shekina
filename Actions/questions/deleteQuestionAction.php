<?php
//voir si l'auth est vraiment authentifier
//ou voir si l'utilisateur est bien connecter sur le site
session_start();
if(!isset($_SESSION["auth"]))
{
    header("Location: ../../connexion.php");
}
require("../databases.php");
//suppression de la question
//verifiez si l'identifiant de la question est passe dans l'url
if(isset($_GET["id"]) && !empty($_GET["id"]))
{
//voir si l'id de la question  existe bien dansla table
    $idOfQuestion =$_GET["id"];
    $checkQuestionAlreadyexist = $conn->prepare("SELECT id_auteur FROM questions WHERE  id=?");
    $checkQuestionAlreadyexist->execute([$idOfQuestion]);

    //voir si la question exist
    if($checkQuestionAlreadyexist->rowCount()>0)
    {
        //voir si l'utilisateur est l'auteur de la question de  suppression
        $userQuestion= $checkQuestionAlreadyexist->fetch();
        if($userQuestion["id_auteur"] == $_SESSION["id"])
        {
            $deleteQuestion = $conn->prepare("DELETE FROM questions WHERE id =?");
            $deleteQuestion->execute([$idOfQuestion]);

            header("Location: ../../myQuestion.php");
        }
        else{
            echo "vous avez pas le droit de supprimer la question";
        }
    }else{
        echo "aucune question n'a ete trouveé";
    }

}
else{
    echo "aucune question n'a ete trouver";
}


?>