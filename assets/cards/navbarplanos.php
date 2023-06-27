<?php
 
 @session_start();

?>


<?php
        if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
          echo "<nav class=main-nav id=main-nav>";
          echo "<div class=content-wrapper-sm>";
          echo "<a href=../../index.php <img class=navbar-brand id=logonav src=../img/logo.png alt=Ender> </a>";
     
         echo "<div id=menu-button>";
         echo "<div class=bar1></div>";
         echo "<div class=bar2></div>";
         echo "<div class=bar3></div>";
         echo "</div>";
    
    
        echo " <ul class=nav-links>";
    

        echo "<li><a href=../../index.php>Home</a></li>";
        echo "<li><a href=../chat/index.php>Chat</a></li>";
        echo "<li><a href=../feed/feed.php> Feed </a></li>";
        echo "<li><a href=../public/index.php>Perfil </a></li>";
        echo "<li><i class=bi-person-circle> $_SESSION[nome] </i>";
        echo  "<li> <a href=logoff.php>  Sair </a></li>";


        echo "</ul>";
        echo "</div>";
        echo "</nav>";
}   


     else {      
          echo "<nav class=main-nav id=main-nav>";
          echo "<div class=content-wrapper-sm>";
          echo "<img class=navbar-brand id=logonav src=../img/logo.png alt=Ender>";
     
     
          echo "<div id=menu-button>";
          echo "<div class=bar1></div>";
          echo "<div class=bar2></div>";
          echo "<div class=bar3></div>";
          echo "</div>";
     
     
          echo " <ul class=nav-links>";
     
         echo "<li><a href=../../index.php>Home</a></li>";
         echo "<li><a href=../../login.php>Entrar</a></li>";


         echo "</ul>";
         echo "</div>";
         echo "</nav>"; 
          
}
          
