<?php 
session_start();
include('vues/header.php');
include("modeles/monPdo.php");
include("modeles/Login.php");
include("modeles/Blog.php");





$uc = empty($_GET['uc']) ? "accueil" : $_GET['uc']; 
switch($uc){
  case 'accueil' :
    include('vues/Accueil.php');
  break;
  case 'blog' :
    include('controllers/blogController.php');

  break;
  case 'login':

    include('controllers/loginController.php');
  break;
}
?>
</body>
<?php include('vues/footer.php');?>