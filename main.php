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
  <button type="submit" class="btn btn-warning" >Se déconnecter</button>

  </form>

</body>
</html>