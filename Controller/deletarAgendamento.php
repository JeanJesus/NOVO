<?php
    require_once '../models/Classe_Agendamento.php';
    $agen = new Agendamento();
     $agen->deletarAgendamento($_GET['id']);
