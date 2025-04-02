<?php
require "Actions/questions/publishQuestionAction.php";

?>


<!DOCTYPE html>
<html lang="en">
<?php
include "includes/head.php";
?>
<body>
  <?php include "includes/navbar.php"?>
  <!-- formulaire -->
   <div class="container mt-4">
    <h2 class="text-center mt-4">publication </h2>
    <?php
     if(isset($errormsg))
     {
        echo "<p>".$errormsg."</p>";
     }elseif(isset($successmsg)){

         echo "<p>".$successmsg."</p>";
     }
    
    ?>
    
    <form action="" method="POST">
        <div class="form-group">
            <label for="" class="form-label">titre</label>
            <input type="text"  class="form-control" name="title">
        </div>

        <div class="form-group mt-4">
            <label for="" class="form-label">description de la question</label>
           <textarea name="description" class="form-control" id=""></textarea>
        </div>

        <div class="form-group mt4">
            <label for="" class="form-label">contenu de la question</label>
            <textarea name="content"  class="form-control" id=""></textarea>
        </div>
         <button type="submit" class="btn btn-primary mt-4" name="click">publier</button>
    </form>

   </div>

</body>
</html>