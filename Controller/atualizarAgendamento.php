<?php
     require_once '../models/Classe_Agendamento.php';
     $id = $_GET['id'];
     
     $agen = new Agendamento;
     $agen->setCpf_agendado($_POST['cpf']);
     $agen->setOabResponsavel($_POST['n_oab']);
     $agen->setDataAudiencia($_POST['data_audiencia']);
     $agen->setHorario($_POST['horario']);
     $agen->setTipoCaso($_POST['caso']);
     $agen->setDescricao($_POST['descricao']);
     $agen->AtualizarAgendamento($id);
     //var_dump($agen);

     
    