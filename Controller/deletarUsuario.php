<?php
    require_once '../models/Classe_Usuario.php';
    $user = new Usuario();
    $user->deletarUsuario($_GET['id']);
