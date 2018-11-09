<?php
    require_once '../models/Classes.php';
    $cli = new Cliente();
    $cli->deletarCliente($_GET['id']);
    
    
    //echo "<script>alert('Estou funcionando! (delete)');</script>";

    
    
    
/* 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

