<?php

require_once '../models/Classes.php';


$cli = new Cliente;
$cli->setNome($_POST['Nome_Cliente']);
$cli->setEmail($_POST['Email_Cliente']);
$cli->setData_nascimento($_POST['dtnasc']);
$cli->setCpf($_POST['cpf']);
$cli->setRg($_POST['rg']);
$cli->setEstado_civil($_POST['Estado_Civil']);
$cli->setCep($_POST['cep']);
$cli->setEndereco($_POST['endereco']);
$cli->setBairro($_POST['bairro']);
$cli->setCidade($_POST['cidade']);
$cli->setEstado($_POST['estado']);
$cli->setNumero($_POST['numero']);
$cli->setComplemento($_POST['complemento']);
$cli->setEscolaridade($_POST['escolaridade']);
$cli->setProfissao($_POST['profissao']);
$cli->setTelefone($_POST['prependedtext']);
$cli->insertCliente($cli);


    
       
    




        
        