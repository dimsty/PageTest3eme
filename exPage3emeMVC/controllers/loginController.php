<?php

if(!isset($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = "";
    $_SESSION['isconnected'] = false;

  }
$message = "";
$action=$_GET['action'];
switch($action){
    case 'login':
        
        $lesComptes=Login::logUser($_SESSION['pseudo'], $_SESSION['password']);
        include('vues/Connexion.php');

    exit();
}