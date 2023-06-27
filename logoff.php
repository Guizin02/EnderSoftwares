<?php
   include('connect.php');
   include('check.php');
   include('check2.php');


   if(isset($_COOKIE["ID"]) && !empty($_COOKIE["ID"])){
       unset($_COOKIE["ID"]);
       setcookie("ID", "", time()-3600, '/');
       unset($user);
       unset($empresa);
       header('location:./');
   }else{
       echo "Falha ao fazer login";
       header('location:./');
   }
?>
?>