<?php include_once('../Controller/config/verifica_login.php'); ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-image:url('img/Background_Login.jpg'); background-size:cover;">
    <?php include_once('header.php');          ?>
    <?php include_once('cabecalho.php');       ?>
    <?php include_once('menu_lateral.php');    ?>
    <?php include_once('rotas.php');           ?>






  </body>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Deseja Sair?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Selecione "Sair" para encerrar a sessão.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
      <a class="btn btn-primary" href="../Controller/logout.php">Sair</a>
    </div>
  </div>
  </div>
  </div>

</html>

