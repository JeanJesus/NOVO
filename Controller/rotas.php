<?php
$item = $_GET['item'];
if($item =="CadastrarCliente"){
    include_once ('CadastrarCliente.php');
    }else{
      include_once "../View/inicial.php";
}
$item = $_GET['item'];
if($item =="CadastrarAdvogados"){
    include_once ('../View/CadastrarAdvogados.php');
    }else{
      include_once "../View/inicial.php";
}

$item = $_GET['item'];
if($item =="charts"){
    include_once ('../View/charts.php');
    }else{
      include_once "../View/inicial.php";
}

$item = $_GET['item'];
if($item =="CadastrarProcessos"){
    include_once ('../View/Cadastro_Processo.php');
    }else{
      include_once "../View/inicial.php";
}
$item = $_GET['item'];
if($item =="registro_user"){
    include_once ('../View/register.php');
    }else{
      include_once "../View/inicial.php";
}
