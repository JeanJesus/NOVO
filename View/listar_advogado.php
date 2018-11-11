<?php include_once('../Controller/config/verifica_login.php'); ?>
<?php include_once('js/script_menu.php');?>   <!-- Importa os arquivos para o funcionamento dos menus -->
<?php require_once '../models/Classe_Advogado.php';
    $adv = new 
            Advogado();
?>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<br />
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Lista de Advogados</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>OAB N°</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>RG</th>
                      <th>Atuação</th>
                      <th>Telefone:</th>
                      <th>Seccional</th>
                      <th>Expedição de Licensa</th>
                      <th>Validade Licensa</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                      
                      
                      
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>OAB N°</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>RG</th>
                      <th>Atuação</th>
                      <th>Telefone:</th>
                      <th>Seccional</th>
                      <th>Expedição de Licensa</th>
                      <th>Validade Licensa</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                      
                    </tr>
                  </tfoot>
                  
                  <tbody>
                     <?php  foreach ($adv->ListarAdvogados() as $key => $value) { ?>
                    <tr>
                      <td><?php echo $value['oab_numero'];  ?></td>
                      <td><?php echo $value['nome'];  ?></td>
                      <td><?php echo $value['cpf'];  ?></td>
                      <td><?php echo $value['rg'];  ?></td>
                      <td><?php echo $value['tipo_caso'];  ?></td>
                      <td><?php echo $value['telefone'];  ?></td>
                      <td><?php echo $value['seccional'];  ?></td>
                      <td><?php echo $value['data_expedicao'];  ?></td>
                      <td><?php echo $value['data_validade'];  ?></td>
                      <td>
                          <?php echo "<a href='inicial.php?item=EditarAdvogado&id=".$value['id_advogado']."'>Editar</a>"; ?>
                       </td>
                       <td>
                               <?php echo"<a href='inicial.php?item=deletarAdvogado&id=".$value['oab_numero'] ."' onclick='return confirm(\"Deseja realmente excluir?\")'>Deletar</a>";?>
                      </td>
                      
                    
                      
                      
                    </tr>
                    <?php } ?>                 
                  </tbody>
                 
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->


</html>
