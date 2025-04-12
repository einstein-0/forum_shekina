<?php
session_start();
require("Actions/databases.php");
$UserREcup = $conn->prepare("SELECT id, title, description, content FROM questions where id_auteur=? ORDER BY id DESC");
$UserREcup->execute([$_SESSION["id"]]);


?>