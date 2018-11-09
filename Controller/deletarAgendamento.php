<?php
    require_once '../models/Classes.php';
    $agen = new Agendamento();
     $agen->deletarAgendamento($_GET['id']);
