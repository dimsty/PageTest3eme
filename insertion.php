<?php 

session_start();

require_once('database.php');

//-------------------------------------------------

$action = filter_input(INPUT_POST,"action");



if(!isset($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = "";

  }



  $pseudo = filter_input(INPUT_POST,"nom");
  $password = filter_input(INPUT_POST,"password");
  $password2 = filter_input(INPUT_POST,"password2");


$message = "";

$req = $myDb->prepare('INSERT INTO super123.user(pseudo, password) VALUES(:pseudo, :password)');
      
if($password != $password2){
  echo "<div class=\"alert alert-danger\" role=\"alert\">";
  echo "Mots de passe différents";
  echo "</div>";

} else{
  if($pseudo == null || $password == null){
    $message = "";
}
else{
 $req->execute(array(
     'pseudo' => $pseudo,
     'password' => $password
     ));
     echo "<div class=\"alert alert-primary\" role=\"alert\">";
     echo "Compte crée avec succés";
     echo "</div>";

     sleep(1.5);
     header("Location: connection.php");




}
   
if($action == "creer"){
 if($pseudo == null || $password == null){
  echo "<div class=\"alert alert-danger\" role=\"alert\">";
  echo "Veuillez mettre qqch dans les cases";
  echo "</div>";

  }
 
}
}

echo $message;

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
    <form method="POST">
    <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" value="<?= $pseudo?>" name="nom" class="form-control" required>
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" required>
    <label for="password">Veuillez le réecrire</label>
    <input type="password" name="password2" class="form-control" required>
    <button type="submit" name="action" value="creer" class="btn btn-success">Créer le compte</button>
    <a class="btn btn-primary btn" href="connection.php" role="button">Revenir en arrière</a>

</div>

    </form>
</body>
</html>