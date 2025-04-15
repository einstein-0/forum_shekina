<?php
require("Actions/databases.php");
//recuperer les question par defaut sans l'xecuter sans la recherche

$getAllquestion = $conn->query("SELECT id, id_auteur, title, description, content, pseudo_auteur, date_publication FROM questions ORDER BY id DESC LIMIT 0,5");
//verifier voir si la variable search est passé dans l'url et n'est pas vide
if(isset($_GET["search"]) && !empty($_GET["search"]))
{
    $Usersearch =$_GET["search"];
   // $getAlquestion = $conn->prepare("SELECT * FROM questions where title=?");
    //$getAllquestion->execute([$Usersearch]); cela est bien mais la recherche saura trop ciblé
    //query permet de ne pas execute en meme temp
    //le % signifie d'avoir les valeur avant ou apres la variable ou la recherche ou
    //encore interpreter d'une maniere peut importe ce qu'on a avant ou apres  selectionner le mot clé
    //*recuper les question qui correspond au titre
    $getAllquestion =$conn->query("SELECT id, id_auteur, title, description, content, pseudo_auteur, date_publication FROM questions where title LIKE '%".$Usersearch."%' ORDER BY id DESC");
}



?>