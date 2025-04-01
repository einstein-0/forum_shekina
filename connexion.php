<?php

require ("Actions/User/connexionAction.php");

?>



<!DOCTYPE html>
<html lang="en">
<?php
include "includes/head.php";
?>
<body>
  
  <!-- formulaire -->
   <div class="container mt-4">
    <h2 class="text-center mt-4">Connexion</h2>
    <?php
     if(isset($errormsg))
     {
        echo "<p>".$errormsg."</p>";
     }
    
    ?>
    
    <form action="" method="POST">
        <div class="form-group">
            <label for="" class="form-label">pseudo</label>
            <input type="text" class="form-control" name="pseudo" placeholder="votre pseudo">
        </div>

        <div class="form-group mt-4">
            <label for="" class="form-label">password</label>
            <input type="password" class="form-control" name="password" placeholder="mot de passe">
        </div>
         <button type="submit" class="btn btn-primary mt-4" name="click">Se connecter</button>
    </form>

   </div>

</body>
</html>