<?php
require("Actions/questions/myQuestionAction.php");




?>



<!DOCTYPE html>
<html lang="en">
<?php
 include "includes/head.php"

?>
<body>
    <?php
     include "includes/navbar.php";
    ?>
    <?php
    while($userInfos = $UserREcup->fetch())
    {
        ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $userInfos["title"];?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
            <p class="card-text"><?= $userInfos["description"];?>.</p>
            <p class="card-text"><?= $userInfos["content"];?>.</p>
            <a href="#" class="btn btn-primary">acceder a la question</a>
            <a href="editQuestion.php?id=<?= $userInfos["id"];?>" class="btn btn-warning">modifier la question</a>
            <a href="Actions/questions/deleteQuestionAction.php?id=<?=$userInfos["id"];?>"class="btn btn-danger">supprimer la question</a>
        </div>
    </div>

        <?php
    }
    
    ?>
 
    
</body>
</html>