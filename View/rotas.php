<?php
$item = $_GET['item'];
if($item =="CadastrarCliente"){
    include_once ('CadastrarCliente.php');
    }else{
      include_once "inicial.php";
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
if($item =="CadastrarAgendamento"){
    include_once ('../View/Cadastro_Agendamento.php');
    }else{
      include_once "../View/inicial.php";
}
$item = $_GET['item'];
if($item =="registro_user"){
    include_once ('../View/register.php');
    }else{
      include_once "../View/inicial.php";
}

$item = $_GET['item'];
if($item =="Listar_Clientes"){
    include_once ('../View/listar_cliente.php');
    }else{
      include_once "../View/inicial.php";
}

$item = $_GET['item'];
if($item =="Listar_Advogados"){
    include_once ('../View/listar_advogado.php');
    }else{
      include_once "../View/inicial.php";
}
$item = $_GET['item'];
if($item =="Listar_Agendamentos"){
    include_once ('../View/listar_agendamentos.php');
    }else{
      include_once "../View/inicial.php";
}
$item = $_GET['item'];
if($item =="Listar_Usuarios"){
    include_once ("../View/listar_usuarios.php");
    }else{
      include_once "../View/inicial.php";
}



$item = $_GET['item'];
if($item =="EditarCliente"){
    include_once ('Editar_Cliente.php');
    }else{
      include_once "inicial.php";
}
$item = $_GET['item'];
if($item =='EditarAdvogados'){
    include_once ('../View/EditarAdvogados.php');
    }else{
      include_once "../View/inicial.php";
}




