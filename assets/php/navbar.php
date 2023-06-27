<?php
     include('check.php');
     include('check2.php');
        if(isset($_COOKIE["ID"]) && !empty($_COOKIE["ID"])) {
          echo "<nav class=main-nav id=main-nav>";
          echo "<div class=content-wrapper-sm>";
          echo "<img class=navbar-brand id=logonav src=assets/img/logo.png alt=Ender>";
     
     
          echo "<div id=menu-button>";
          echo "<div class=bar1></div>";
          echo "<div class=bar2></div>";
          echo "<div class=bar3></div>";
          echo "</div>";
     
     
          echo " <ul class=nav-links>";
     
         echo "<li><a href=#home>Home</a></li>";
         echo "<li><a href=#about>Sobre Nós</a></li>";
         echo "<li><a href=#app>Aplicativo</a></li>";
         echo "<li><a href=#compra>Planos</a></li>";
         echo "<li><a href=chat/>Chat</a></li>";
         echo "<li><a href=feed/feed.php>Feed</a></li>";
         if($user_id == 6){
         echo "<li><a href=./admin/painel.php>Admin</a></li>";
         }
         echo "<li><a href=perfil/><i class=bi-person-circle>$user[nome]</i></a></li>";
         echo  "<li> <a href=logoff.php> Sair </a></li>";


         echo "</ul>";
         echo "</div>";
         echo "</nav>";
}   else if(isset($_COOKIE["ID_jr"]) && !empty($_COOKIE["ID_jr"])) {
     echo "<nav class=main-nav id=main-nav>";
     echo "<div class=content-wrapper-sm>";
     echo "<img class=navbar-brand id=logonav src=assets/img/logo.png alt=Ender>";


     echo "<div id=menu-button>";
     echo "<div class=bar1></div>";
     echo "<div class=bar2></div>";
     echo "<div class=bar3></div>";
     echo "</div>";


     echo " <ul class=nav-links>";

    echo "<li><a href=#home>Home</a></li>";
    echo "<li><a href=#about>Sobre Nós</a></li>";
    echo "<li><a href=#app>Aplicativo</a></li>";
    echo "<li><a href=#compra>Planos</a></li>";
    echo "<li><a href=chat/>Chat</a></li>";
    echo "<li><a href=feed/feed.php>Feed</a></li>";
    echo "<li><a href=perfil/><i class=bi-person-circle>$user[nomefantasia]</i></a></li>";
    echo  "<li> <a href=logoff.php> Sair </a></li>";


    echo "</ul>";
    echo "</div>";
    echo "</nav>";
} 
     else {  
          echo "<nav class=main-nav id=main-nav>";
          echo "<div class=content-wrapper-sm>";
          echo "<img class=navbar-brand id=logonav src=assets/img/logo.png alt=Ender>";
     
     
          echo "<div id=menu-button>";
          echo "<div class=bar1></div>";
          echo "<div class=bar2></div>";
          echo "<div class=bar3></div>";
          echo "</div>";
     

          echo " <ul class=nav-links>";
     
         echo "<li><a href=#home>Home</a></li>";
         echo "<li><a href=#about>Sobre Nós</a></li>";
         echo "<li><a href=#app>Aplicativo</a></li>";
         echo "<li><a href=#compra>Planos</a></li>";
         echo "<li><a href=#teams>Nossa Equipe</a></li>";
         echo "<li><a href=login.php>Entrar</a></li>";


         echo "</ul>";
         echo "</div>";
         echo "</nav>"; 
}
          
