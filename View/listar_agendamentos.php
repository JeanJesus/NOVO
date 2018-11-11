<?php include_once('js/script_menu.php');?>   <!-- Importa os arquivos para o funcionamento dos menus -->
 <?php include_once '../models/Classe_Agendamento.php'; ?>
 <?php  $agen = new Agendamento();  ?>
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
              Lista De Agendamentos</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Cliente</th>
                      <th>Advogado Responsável:</th>
                      <th>Data Audiencia</th>
                      <th>Horario</th>
                      <th>Tipo de Caso</th>
                      <th>Descrição</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>CPF - CLIENTE</th>
                      <th>Registro do Advogado Responsável:</th>
                      <th>Data Audiencia</th>
                      <th>Horario</th>
                      <th>Tipo de Caso</th>
                      <th>Descrição</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   <?php  foreach ($agen->ListarAgendamento() as $key => $value) { ?>
                    <tr>
                      <td><?php echo $value['nome_cliente'];  ?></td>
                      <td><?php echo $value['nome'];  ?></td>
                      <td><?php echo $value['data_audiencia'];  ?></td>
                      <td><?php echo $value['horario'];  ?></td>
                      <td><?php echo $value['tipo_caso']; ?></td>
                      <td><?php echo $value['descricao'];  ?></td>
                      <td>
                               <?php echo "<a href='inicial.php?item=EditarAgendamento&id=".$value['id_agendamento']."'>Editar</a>"; ?>
                       </td>
                       <td>
                               <?php echo"<a href='inicial.php?item=DeletarAgendamento&id=".$value['id_agendamento'] ."' onclick='return confirm(\"Deseja realmente excluir?\")'>Deletar</a>";?>
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
