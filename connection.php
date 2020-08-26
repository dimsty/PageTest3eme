<?php


session_start();

try
{
  $myDb = new PDO(
      'mysql:host=localhost;dbname=super123',
      "root",
      "Super",
      array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
      )
  );
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//-------------------------------------------------


if(!isset($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = "";

  }
$message = "";


  $pseudo = filter_input(INPUT_POST,"nom");
  $password = filter_input(INPUT_POST,"password");

  if($pseudo != "" && $password != ""){
    $sql = "SELECT * FROM user";
    $reponse = $myDb->prepare($sql);
    $reponse->execute();





    if (($res = $reponse->fetch()) == false) {
  } else {
      do {
          if($pseudo == $res['pseudo'] && $password == $res['password']){
          
            $_SESSION['pseudo'] = $pseudo;
            header("Location: main.php");

          }
          else{
            $message = "Entrée incorrecte";
          }
      } while ($res = $reponse->fetch());
  }
  }
  else{
    $message = "Entrée incorrecte";
  }
if($pseudo == null && $password == null){
  $message = "";
}
  echo "<div class=\"alert alert-danger\" role=\"alert\">";
  echo $message;
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
<form method="POST">
<div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" name="nom" class="form-control">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
    <button type="submit" class="btn btn-success">Se connecter</button>
<a href="insertion.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Créer un compte</a>
</div>
    </form>
</body>
</html>
