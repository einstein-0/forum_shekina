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
    while($question = $UserREcup->fetch())
    {
        ?>
    <div class="card">
        <div class="card-body">
        <a href="Article.php?id=<?=$question["id"];?>">
                       <?= $question["title"];?>
                  </a>
            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
            <p class="card-text"><?= $question["description"];?>.</p>
            <p class="card-text"><?= $question["content"];?>.</p>
            <a href="Article.php?id=<?= $question["id"]; ?>" class="btn btn-primary">acceder a la question</a>
            <a href="editQuestion.php?id=<?= $question["id"];?>" class="btn btn-warning">modifier la question</a>
            <a href="Actions/questions/deleteQuestionAction.php?id=<?=$question["id"];?>"class="btn btn-danger">supprimer la question</a>
        </div>
    </div>

        <?php
    }
    
    ?>
 
    
</body>
</html>