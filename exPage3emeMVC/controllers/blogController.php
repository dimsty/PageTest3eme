<?php
$action=$_GET['action'];
switch($action){
    case 'see':
    $lesBlogs=Blog::GetBlog($_SESSION['pseudo']);
    include('vues/showBlog.php');
    exit();
}
        
