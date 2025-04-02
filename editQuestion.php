<?php
 require("Actions/questions/editquestionAction.php");

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
     }
    
    ?>
    
    <?php
                if(isset($date_publication))
                {
                    ?>
                        <form action="" method="POST">
                        
                            <div class="form-group mt-4">
                                <label for="" class="form-label">Titre de la question</label>
                                <input type="text" class="form-control" name="title" placeholder="" >
                            </div>
                            <div class="form-group mt-4">
                                <label for="" class="form-label">descriptions de la question</label>
                                <textarea name="description"  class="form-control" ></textarea>
                            </div>
                            <div class="form-group mt-4"> 
                                <label for="" class="form-label">contenu de la question</label>
                                <textarea name="content" class="form-control" ></textarea>
                            </div>
                        
                            <button type="submit" class=" mt-4 btn btn-primary" name="click">modifier la question</button>
                        
                        </form>
                <?php
                }
          
                    ?>

   </div>

</body>
</html>