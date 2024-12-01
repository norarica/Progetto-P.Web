<?php
   // Start the session
   session_start();
/*
   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
      die();
   }
*/ 
   if(isset($_SESSION['login_user'])) {
      $login_session = $_SESSION['login_user'];
      $login_username = $_SESSION['login_name'];

      if(isset($_SESSION['admin_bool'])){
         $adminbool = $_SESSION['admin_bool'];
      }
   }  

   
   

?>