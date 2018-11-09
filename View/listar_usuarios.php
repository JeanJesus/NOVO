<?php include_once('js/script_menu.php'); ?>   <!-- Importa os arquivos para o funcionamento dos menus -->
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
<?php 

include_once '../models/Classes.php';
$user =new Usuario(); ?>

<br />
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Lista De Usuários</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                        <th>Seha</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                        <th>Seha</th>
                    </tr>
                </tfoot>
                
                <?php foreach ($user->findAll() as $key => $value): ?>
                <tbody>
                    <tr>
                        <td><?php echo $value->primeiro_nome; ?></td>
                        <td><?php echo $value->ultimo_nome; ?></td>
                        <td><?php echo $value->email; ?></td>                       
                        <td><?php echo $value->senha; ?></td>

                    </tr>

                <?php endforeach; ?>

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
