<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


<?php
     include('../check.php');
     if(isset($_COOKIE["ID"]) && !empty($_COOKIE["ID"])) {
     echo "<nav class=main-nav id=main-nav>";
     echo "<div class=content-wrapper-sm>";


     echo "<div id=menu-button>";
     echo "<div class=bar1></div>";
     echo "<div class=bar2></div>";
     echo "<div class=bar3></div>";
     echo "</div>";


     echo " <ul class=nav-links>";

    echo "<li><a href=../>Home</a></li>";
    echo "<li><a href=../feed/feed.php>Feed</a></li>";
    echo "<li><a href=../perfil/index.php ><i class=bi-person-circle> $user[nome] </i></a></li>";
    echo  "<li> <a href=../logoff.php> Sair </a></li>";

    echo "</ul>";
    echo "</div>";
    echo "</nav>";
}   


     else {  
          echo "<nav class=main-nav id=main-nav>";
          echo "<div class=content-wrapper-sm>";     
     
          echo "<div id=menu-button>";
          echo "<div class=bar1></div>";
          echo "<div class=bar2></div>";
          echo "<div class=bar3></div>";
          echo "</div>";
     
     
          echo " <ul class=nav-links>";
     
         echo "<li><a href=../index>Home</a></li>";
         echo "<li><a href=../feed/feed.html> Feed </a></li>";
         echo "<li><a href=../public/index.php> Perfil </a></li>";




     
         echo "</ul>";
         echo "</div>";
         echo "</nav>"; 
}
          
