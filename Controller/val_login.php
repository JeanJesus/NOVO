<?php
  session_start();
  include_once('conexao.php');


    if(empty($_POST['email']) || empty($_POST['senha'])){
      header('location: ../View/index.php');
      exit();
    }



    $Email = pg_escape_string ($conn, $_POST['email']); //pg_scape_string ajuda a proteger contra ataques de sql injectors//
    $Senha = pg_escape_string($conn ,$_POST['senha']);
    $user_name;

    $query_login = "select email, senha from login where email='{$Email}' and senha = md5('$Senha')";



    $resultado = pg_query($conn, $query_login);

    $row = pg_num_rows($resultado);



    if($row == 1){
      $_SESSION['email'] = $Email;
      header('location: ../View/inicial.php');
      exit();

    }else{
      header('location: ../View/index.php');

    }

?>
