<?php 

session_start();

require_once('database.php');

echo "<div class=\"alert alert-primary\" role=\"alert\">";
echo "Bonjour ".$_SESSION['pseudo'];
echo "</div>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
*{
  padding: 5px;
}
</style>
</head>
<body>
  <form action="logout.php">
  <div class="jumbotron">
  <h1 class="display-4">Bienvenue a votre compte</h1>
  <p class="lead">Sur cette page vous pouvez voir les détails de votre compte</p>
  <hr class="my-4">
  <p>Appuyez sur ce bouton pour changer vos informations</p>
  <a class="btn btn-primary btn-lg" href="modifier.php" role="button">Changer vos parametres</a>
  <a class="btn btn-primary btn-lg" href="index.php" role="button">Revenir en arrière</a>

</div>
  <button type="submit" class="btn btn-warning" >Se déconnecter</button>

  </form>

</body>
</html>