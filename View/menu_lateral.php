<?php include_once('../Controller/config/verifica_login.php'); ?>
<div id="wrapper">

  <!-- Sidebar -->

  <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="inicial.php">
        <i class="fas fa-fw fa fa-home"></i>
        <span>Início</span>
      </a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa fa-address-card"></i>
        <span>Cadastrar</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Cadastrar:</h6>
        <a class="dropdown-item" href="inicial.php?item=CadastrarCliente">Clientes</a>
        <a class="dropdown-item" href="inicial.php?item=CadastrarAdvogados">Advogados</a>
        <a class="dropdown-item" href="inicial.php?item=CadastrarAgendamento">Agendamentos</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Other Pages:</h6>

        <a class="dropdown-item" href="inicial.php?item=registro_user">Usuário</a>
        
      </div>
    </li>

  <!--  <li class="nav-item">
      <a class="nav-link" href="tables.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li> -->

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-table"></i>
        <span>Consultar</span></a>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Listar:</h6>
        <a class="dropdown-item" href="inicial.php?item=Listar_Clientes">Clientes</a>
        <a class="dropdown-item" href="inicial.php?item=Listar_Advogados">Advogados</a>
        <a class="dropdown-item" href="inicial.php?item=Listar_Agendamentos">Agendamentos</a>
        <a class="dropdown-item" href="inicial.php?item=Listar_Usuarios">Usuários</a>
        <div class="dropdown-divider"></div>


      </div>
    </li>



   
  </ul>

  <div id="content-wrapper">

    <div class="container-fluid">
