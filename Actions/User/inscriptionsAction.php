<?php
 require("Actions/databases.php");
 if(isset($_POST["click"]))
 {
    //voir si mes champ son verifier
    if(!empty($_POST["pseudo"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["password"]))
    {
        $pseudo =htmlspecialchars($_POST["pseudo"]);
        $nom =htmlspecialchars($_POST["nom"]);
        $prenom =htmlspecialchars($_POST["prenom"]);
        $password =password_hash($_POST["password"], PASSWORD_DEFAULT);
        //verfications de pseudo
        //recuperations
        $checkUserAlreadyexist = $conn->prepare("SELECT pseudo from users where pseudo =?");
        $checkUserAlreadyexist->execute([$pseudo]);

        if($checkUserAlreadyexist->rowCount()==0)
        {
            $insertUserOnwebsite = $conn->prepare("INSERT INTO users(pseudo, nom, prenom, password) VALUES (?, ?, ?, ?)");
            $insertUserOnwebsite->execute([$pseudo, $nom, $prenom,$password]);

            //authentification avec la session
            //recuperation
            $UserSession = $conn->prepare("SELECT id, pseudo, nom, prenom from users where pseudo=? and nom=? and prenom=?");
            $UserSession->execute([$pseudo, $nom, $prenom]);
            $Userinfo=$UserSession->fetch();
            
                $_SESSION["auth"]= "true";
                $_SESSION["pseudo"]= $Userinfo["pseudo"];
                $_SESSION["nom"]= $Userinfo["nom"];
                $_SESSION["prenom"]= $Userinfo["prenom"];
           
                header("location: connexion.php");
        
        }else{
            $errormsg = "votre pseudo existe deja";
        }

    }else{
        $errormsg = "veillez remplir vos champs...";
    }
 }


?>