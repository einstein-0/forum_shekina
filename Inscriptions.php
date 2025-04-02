<?php
require "Actions/User/inscriptionsAction.php";

?>


<!DOCTYPE html>
<html lang="en">
<?php
include "includes/head.php";
?>
<body>
  
  <!-- formulaire -->
   <div class="container mt-4">
    <h2 class="text-center mt-4">inscriptions</h2>
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
            <label for="" class="form-label">nom</label>
            <input type="text" class="form-control" name="nom" placeholder="votre nom">
        </div>

        <div class="form-group mt4">
            <label for="" class="form-label">prenom</label>
            <input type="text" class="form-control" name="prenom" placeholder="votre prenom">
        </div>

        <div class="form-group mt-4">
            <label for="" class="form-label">password</label>
            <input type="password" class="form-control" name="password" placeholder="mot de passe">
        </div>
         <button type="submit" class="btn btn-primary mt-4" name="click">s'inscrire</button>
         <a href="connexion.php" class="">j'ai deja u compte? se connecter</a>
    </form>

   </div>

</body>
</html>