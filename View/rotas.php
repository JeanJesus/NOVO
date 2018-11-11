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
if($item =="editar_Cliente"){
    include_once ('Editar_Cliente.php');
    }else{
      include_once "inicial.php";
}
$item = $_GET['item'];
if($item =='EditarAdvogado'){
    include_once ('EditarAdvogados.php');
    }else{
      include_once "../View/inicial.php";
}

/*$item = $_GET['item'];
if($item =='editar_item'){
    include_once ('../View/Editar_Cliente.php');
    }else{
      include_once "../View/inicial.php";";
} */


$item = $_GET['item'];
if($item =='deletarCliente'){
    include_once ('../Controller/deletarCliente.php');
    }else{
      include_once "../View/inicial.php";
}
$item = $_GET['item'];
if($item =='deletarAdvogado'){
    include_once ('../Controller/deletarAdvogado.php');
    }else{
      include_once "../View/inicial.php";
}

$item = $_GET['item'];
if($item =='DeletarAgendamento'){
    include_once ('../Controller/deletarAgendamento.php');
    }else{
      include_once "../View/inicial.php";
}

$item = $_GET['item'];
if($item =='DeletarUsuario'){
    include_once ('../Controller/deletarUsuario.php');
    }else{
      include_once "../View/inicial.php";
}



$item = $_GET['item'];
if($item =='EditarAgendamento'){
    include_once ('Editar_Agendamento.php');
    }else{
      include_once "../View/inicial.php";
}


$item = $_GET['item'];
if($item =='EditarUsuario'){
    include_once ('EditarUsuario.php');
    }else{
      include_once "../View/inicial.php";
}



