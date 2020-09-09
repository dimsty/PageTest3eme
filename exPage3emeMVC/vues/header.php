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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="main.php">Page personnelle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <?php 

              echo "<li class=\"nav-item active\"><a class=\"nav-link\" href=\"index.php?uc=login&action=login\">Se connecter <span class=\"sr-only\">(current)</span></a></li>";
              echo "<li class=\"nav-item active\"><a class=\"nav-link\" href=\"index.php?uc=blog&action=see\">Voir vos blogs <span class=\"sr-only\">(current)</span></a></li>";
              echo "<li class=\"nav-item active\"><a class=\"nav-link\" href=\"index.php?uc=blog&action=add\">Ecrire un blog <span class=\"sr-only\">(current)</span></a></li>";
                            echo "<li class=\"nav-item active\"><a class=\"nav-link\" href=\"blogErase.php\">Effacer un blog <span class=\"sr-only\">(current)</span></a></li>";

          ?>

      

    </ul>

  </div>
</nav>