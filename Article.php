<?php
session_start();
 require("Actions/questions/showArticleContentAction.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php
  include "includes/head.php";
?>
<body>
    <?php
        include "includes/navbar.php";
    ?>
    <div class="container">
        <?php
        if(isset($errormsg))
        {
            echo "<p>".$errormsg."</p>";
        }
        ?>
    <?php
    
    if(isset($date_publication))
    {
        ?>
       <h3><?=$title_question;?></h3>
       <hr>
       <p><?= $content_question;?></p>
       <hr>
       <small><?= $pseudo_auteur." ". $date_publication?></small>

        <?php
    }
        ?>
    </div>
    
</body>
</html>