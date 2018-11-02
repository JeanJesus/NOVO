<?php
/*Parte de logout*/
  session_start();
  session_destroy();
  header('location: ../index.php');
  exit();

?>
