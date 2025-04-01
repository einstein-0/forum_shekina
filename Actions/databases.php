<?php
try{
    session_start();
    $conn= new PDO("mysql:host=localhost; dbname=forum_exo", "root", "");
}
catch(Exception $e){
    die("il y a erreur".$e->getMessage());
}

?>