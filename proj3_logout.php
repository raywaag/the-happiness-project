<!--Logout Form-->
<?php
   session_start();

   if(session_destroy()) {
      header("Location: proj3_login.php");
   }
?>
