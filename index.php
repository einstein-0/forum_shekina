<?php
//  require("Actions/User/securityAction.php");
session_start();
require("Actions/questions/showAllQuesitonAction.php");
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
  <!-- constituer un tableau de recherche de question -->
  <div class="container">
    <form  method="GET">

      <div class="form-group row mt-4">

        <div class="col-8">
          <input type="search" name="search"  class="form-control">
        </div>

        <div class="col-4 ">
            <button type="submit" class="btn btn-success">rechercher</button>
        </div>
        
          <?php
          while($question= $getAllquestion->fetch())
          {
            ?>
             <div class="card mt-4">
                <div class="card-header" style="color:blue;">
                  <a href="Article.php?id=<?=$question["id"];?>">
                       <?= $question["title"];?>
                  </a>
                </div>
                <div class="card-body">
                <?= $question["description"];?>
                </div>
                <div class="card-footer" style="color: orange;">
                publier par <?= $question["pseudo_auteur"];?> le  <?= $question["date_publication"];?>
                </div>
             </div>
            <?php
          }
          
          ?>

      </div>
    </form>
  </div>
</body>
</html>