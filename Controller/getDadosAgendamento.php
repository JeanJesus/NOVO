<?php
     require_once '../models/Classes.php';
     $agen = new Agendamento;
     $agen->setCpf_agendado($_POST['cpf']);
     $agen->setOabResponsavel($_POST['n_oab']);
     $agen->setDataAudiencia($_POST['data_audiencia']);
     $agen->setHorario($_POST['horario']);
     $agen->setTipoCaso($_POST['caso']);
     $agen->setDescricao($_POST['descricao']);
     

     
     var_dump($agen);