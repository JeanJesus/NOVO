<?php
    require_once '../models/Classes.php';
    $user = new Usuario();
    $user->deletarUsuario($_GET['id']);
