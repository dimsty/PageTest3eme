<?php


foreach($lesBlogs as $key){
    
     echo "<h1 class=\"display-4\">".$key->getTitre()."</h1>";
     echo "<p class=\"lead\">".$key->getContenu()."</p>";
    
}



  
