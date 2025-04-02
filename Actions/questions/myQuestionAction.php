<?php
require("Actions/databases.php");
$UserREcup = $conn->prepare("SELECT title, description, content FROM questions where id_auteur=? ORDER BY id DESC");
$UserREcup->execute([$_SESSION["id"]]);


?>