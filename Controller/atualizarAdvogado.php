<?php
    $id = $_GET['id'];
      require_once '../models/Classe_Advogado.php';
    
    $adv = new Advogado;
   // echo "ESTOU RECEBENDO O ID: $id ";
    $adv->setNome($_POST['NomeAdv']);
    $adv->setCpf($_POST['cpf']);
    $adv->setData_nascimento($_POST['dtnasc']);
    $adv->setRg($_POST['rg']);
    $adv->setEstado_civil($_POST['Estado_Civil']);
    $adv->setTelefone($_POST['prependedtext']);
    $adv->setSeccional($_POST['seccional']);
    $adv->setN_oab($_POST['oab']);
    $adv->setData_expedicao($_POST['dtexped']);
    $adv->setData_validade($_POST['dtval']);
    $adv->setArea_de_atuacao($_POST['caso']);
    $adv->atualizarAdvogado($id);

  