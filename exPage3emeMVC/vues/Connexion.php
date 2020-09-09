<?php 



  $pseudo = filter_input(INPUT_POST,"nom");
  $password = filter_input(INPUT_POST,"password");


  echo "<div class=\"alert alert-danger\" role=\"alert\">";
  echo $message;
  echo "</div>";
  
  $_SESSION['pseudo'];
  var_dump($_SESSION['pseudo']);
  var_dump($_SESSION['password']);
  
  ?>

<form method="POST">
<div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" name="nom" class="form-control">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
    <button type="submit" class="btn btn-success">Se connecter</button>
<a href="insertion.php" class="btn btn-primary btn active" role="button" aria-pressed="true">Créer un compte</a>
</div>
    </form>