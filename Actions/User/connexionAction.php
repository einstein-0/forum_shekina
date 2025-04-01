<?php
 require("Actions/databases.php");
 if(isset($_POST["click"]))
 {
    //voir si mes champ son verifier
    if(!empty($_POST["pseudo"]) &&  !empty($_POST["password"]))
    {
        $pseudo =htmlspecialchars($_POST["pseudo"]);
        $password =htmlspecialchars($_POST["password"]);
        //verfications de pseudo
        //recuperations
        $checkUserAlreadyexist = $conn->prepare("SELECT * from users where pseudo =?");
        $checkUserAlreadyexist->execute([$pseudo]);
        if($checkUserAlreadyexist->rowCount()>0)
        {
            $Userinfo=$checkUserAlreadyexist->fetch();
            if(password_verify($password, $Userinfo["password"]))
            {
                $_SESSION["auth"]= "true";
                $_SESSION["id"]= $Userinfo["id"];
                $_SESSION["nom"]= $Userinfo["nom"];
                $_SESSION["prenom"]= $Userinfo["prenom"];
                $_SESSION["pseudo"]= $Userinfo["pseudo"];
           
                header("location: index.php");
            }else{
                $errormsg ="mot de passe incorrect";
            }
            
        }else{
            $errormsg = "pseudo incorrect";
        }

    }else{
        $errormsg = "veillez remplir vos champs...";
    }
 }


?>