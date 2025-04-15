<!DOCTYPE html>
<html lang="en">
<?php
 include "includes/head.php";

?>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">les quetions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publishQuestion.php">publication des questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myQuestion.php">mes questions</a>
        </li>
        <?php
        if(isset($_SESSION["auth"]))
        {
          ?>
             <li class="nav-item">
                <a class="nav-link" href="Actions/User/deconnexion.php">se deconnecter</a>
            </li>
          <?php
        }
        
        ?>
     
       
      </ul>
   
    </div>
  </div>
</nav>
</body>
</html>