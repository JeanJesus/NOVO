<?php
  session_start();
    if(!$_SESSION['email']){
      header('location: ../View/index.php');
    }


?>
