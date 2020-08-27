<?php 
session_start();
require_once('database.php');






$old_password = filter_input(INPUT_POST,"old-password");
$new_password = filter_input(INPUT_POST,"new-password");
$action = filter_input(INPUT_POST,"action");

$req = $myDb->prepare("UPDATE user SET password='$new_password' WHERE pseudo='".$_SESSION['pseudo']."' and password = '".$old_password."'");

$req->execute();
$resultat = $req->rowCount();
if($action == "modifier"){
    if($resultat == 0){
        echo "<div class=\"alert alert-danger\" role=\"alert\">";
      echo "Ancien mot de passe incorrecte";
      echo "</div>";
    }else{
        echo "<div class=\"alert alert-primary\" role=\"alert\">";
     echo "Mot de passe modifié avec succés";
     echo "</div>";
    


    }
   
     }



//return $req->rowCount();

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
<form method="POST">
    <div class="form-group">

    <label for="password">Veuillez mettre l'ancien mot de passe</label>
    <input type="password" name="old-password" class="form-control" required>
    <label for="password">Veuillez mettre le nouveau mot de passe</label>
    <input type="password" name="new-password" class="form-control" required>
    <button type="submit" name="action" value="modifier" class="btn btn-success">Modifier</button>
    <a class="btn btn-primary btn" href="index.php" role="button">Revenir en arrière</a>

</div>

    </form>
</body>
</html>
