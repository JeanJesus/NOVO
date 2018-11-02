<?php
     require_once '../models/Classes.php';
     $user = new Usuario;
     $user->setPrimeiro_nome($_POST['primeiro_nome']);
     $user->setSegundo_nome($_POST['utlimo_nome']);
     $user->setEmail($_POST['email']);
     $user->setSenha($_POST['senha1']);
     
     
     var_dump($user);
    
