<?php 

session_start();
require_once('database.php');

$action = filter_input(INPUT_POST,"action");
$titre = filter_input(INPUT_POST, "titre");
$pseudo = $_SESSION['pseudo'];
$req = $myDb->prepare("DELETE FROM super123.blog WHERE titre='$titre' AND utilisateur='$pseudo'");

if($action == "effacer"){
    $req->execute();
    if($titre != ""){
        echo "<div class=\"alert alert-primary\" role=\"alert\">";
     echo "Blog éffacé!";
     echo "</div>";
  
        
    }else{
        echo "<div class=\"alert alert-danger\" role=\"alert\">";
          echo "Veuillez mettre des informations dans la case";
          echo "</div>";
    }
}
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
<form action="#" method="POST">
<p>Titre de l'article: 
<input type="text" class="form-control" name="titre" /></p> 
<button type="submit" value="effacer" name="action" class="btn btn-danger">Effacer</button>
<a class="btn btn-primary btn" href="index.php" role="button">Revenir en arrière</a>
</form>
<br><div class="alert alert-danger" role="alert">
  ATTENTION: Le blog choisi va être effacé pour toujours
</div>


</body>
</html>