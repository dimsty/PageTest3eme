<?php 
session_start();
require_once('database.php');

$titre = filter_input(INPUT_POST,"titre");
$contenu = filter_input(INPUT_POST,"contenu");
$action = filter_input(INPUT_POST,"action");
$pseudo = $_SESSION['pseudo'];

$req = $myDb->prepare("INSERT INTO super123.blog (titre, contenu, utilisateur) VALUES ('$titre', '$contenu', '$pseudo')");

if($action == 'action'){
    if($titre == null && $contenu == null){
        echo "<div class=\"alert alert-danger\" role=\"alert\">";
          echo "Veuillez mettre des informations dans la case";
          echo "</div>";
    }else{
        echo "<div class=\"alert alert-primary\" role=\"alert\">";
     echo "Blog sauvegardé!";
     echo "</div>";
        $req->execute();

    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
    <style type="text/css">
*{
  padding: 5px;
}
</style>
</head>
<body>
<h2>Nouvel article</h2> 
   <form action="" method="POST"> 
      <p>Titre de l'article: <input type="text" class="form-control" name="titre" /></p> 
      <p>Contenu: <br /><textarea name="contenu" class="form-control" id="exampleFormControlTextarea1" rows="10" cols="50"></textarea></p> 
      <br /><br /> 
      <button type="submit" name="action" value="action" class="btn btn-success">Envoyer</button>
      <a class="btn btn-primary btn" href="index.php" role="button">Revenir en arrière</a>

   </form> 
   <br /> 
</body>
</html>