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
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<?php
include_once '../models/Classes.php';
$cliente = new Cliente();
?>



<br />
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Lista De Clientes</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>EMAIL</th>
                        <th>NASCIMENTO</th>
                        <th>CPF</th>
                        <th>RG </th>
<!--                        <th>ESTADO CIVIL </th>-->
<!--                        <th>CEP</th>
                        <th>ENDERECO</th>
                        <th>BAIRRO</th>-->
                        <th>CIDADE</th>
                        <th>ESTADO </th>
<!--                        <th>NUMERO </th>-->
<!--                        <th>COMPLEMENTO </th>-->
<!--                        <th>ESCOLARIDADE </th>-->
                        <th>PROFISSAO </th>
                        <th>TELEFONE </th>  
                        <th>Editar </th>  
                        <th>Excluir </th> 

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>EMAIL</th>
                        <th>NASCIMENTO</th>
                        <th>CPF</th>
                        <th>RG </th>
<!--                    <th>ESTADO CIVIL </th>-->
<!--                    <th>CEP</th>
                        <th>ENDERECO</th>
                        <th>BAIRRO</th>-->
                        <th>CIDADE</th>
                        <th>ESTADO </th>
<!--                    <th>NUMERO </th>-->
<!--                    <th>COMPLEMENTO </th>-->
<!--                    <th>ESCOLARIDADE </th>-->
                        <th>PROFISSAO </th>
                        <th>TELEFONE </th>
                        <th>Editar </th>  
                        <th>Excluir </th>  


                    </tr>
                </tfoot>
                
                
                
                   
                    <tbody>
                        <?php  foreach ($cliente->findAllCli() as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['id_clientes'] ; ?></td>
                            <td><?php echo $value['nome_cliente']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['data_nascimento']; ?></td>
                            <td><?php echo $value['cpf']; ?></td>
                            <td><?php echo $value['rg']; ?></td>
                            
                          
                            <td><?php echo $value['cidade']; ?></td>
                            <td><?php echo $value['estado']; ?></td>
                            
                           
                            
                            <td><?php echo $value['profissao']; ?></td>
                            <td><?php echo $value['telefone']; ?></td>
                            <td><a href="inicial.php?item=editar_item">Editar</a></td>
                           <!-- <td><a href="inicial.php?item=deletarCliente&id=".value[id]."">Deletar</a></td>
                           -->
                           <td>
                               <?php echo"<a href='inicial.php?item=deletarCliente&id=".$value['id_clientes'] ."' onclick='return confirm(\"Deseja realmente excluir?\")'>Deletar</a>";?>
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
