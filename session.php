<?php
   // Start the session
   session_start();

   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
      die();
   }
   $login_session = $_SESSION['login_user'];
   
   if(isset($_SESSION['admin_bool'])){
      $adminbool = $_SESSION['admin_bool'];
   }
?>