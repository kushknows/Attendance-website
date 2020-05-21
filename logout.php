<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have been LOGOUT !';
   header('Refresh: 2; URL = login.php');
?>