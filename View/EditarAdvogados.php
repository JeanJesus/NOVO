<?php include_once('../Controller/config/verifica_login.php'); ?>
<?php include_once '../models/Classe_Advogado.php'; ?>
<?php $adv = new Advogado(); ?>
<div>
    <div id="content-wrapper">

        <div class="container-fluid">
            <div align="center">
                <img src="img/Logo.png" width="130px" height="100px">
            </div><br />

            <!-- inicio de formulario para cadastro de advogados -->

            <div>

                <?php
                if (isset($_GET['item'])) {
                    $id = $_GET['id'];
                    // echo " ESTOU RECEBENDO O ID: $id";
                    //$resultado = $cli->EncontrarCliente($id);
                    $resultado = $adv->EncontrarAdvogado($id);
                    ?>
                    <form method="post" action="../Controller/atualizarAdvogado.php?id=<?php echo $id ?>">
                        <div class="outside">
                            <div class="container-fluid"><br />
                                <div class="inside">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nome:</label>
                                            <input type="text" name="NomeAdv"value="<?php echo $resultado['nome']; ?>" class="form-control" id="inputEmail4" placeholder="Nome">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">CPF:</label>
                                            <input id="cpf" name="cpf"value="<?php echo $resultado['cpf']; ?>" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4">Data de Nascimento:</label>
                                            <input id="dtnasc" name="dtnasc"value="<?php echo $resultado['data_nascimento']; ?>" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                        </div>



                                        <div class="form-group col-md-3">
                                            <label for="inputAddress">RG:</label>
                                            <input id="cpf" name="rg" placeholder="Apenas números" value="<?php echo $resultado['rg']; ?>" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                                        </div>



                                        <div class="form-group col-md-3">
                                            <label for="inputAddress">Estado Civil:</label>
                                            <select required id="Estado Civil" name="Estado_Civil" class="form-control">
                                                <option selected><?php echo $resultado['estado_civil']; ?></option>
                                                <option value="Solteiro(a)">Solteiro(a)</option>
                                                <option value="Casado(a)">Casado(a)</option>
                                                <option value="Divorciado(a)">Divorciado(a)</option>
                                                <option value="Viuvo(a)">Viuvo(a)</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputPassword4">Telefone:</label>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input id="prependedtext"value="<?php echo $resultado['telefone']; ?>" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                                   OnKeyPress="formatar('## #####-####', this)">
                                        </div>


                                        <div class="form-group col-md-3">
                                            <label for="inputAddress">Seccional:</label>
                                            <select  name="seccional"  class="form-control">
                                                <option value="<?php echo $resultado['seccional']; ?>"><?php echo $resultado['seccional']; ?></option>
                                                <option value="AC">Conselho Seccional - Acre</option>
                                                <option value="AL">Conselho Seccional - Alagoas</option>
                                                <option value="AP">Conselho Seccional - Amapá</option>
                                                <option value="AM">Conselho Seccional - Amazonas</option>
                                                <option value="BA">Conselho Seccional - Bahia</option>
                                                <option value="CE">Conselho Seccional - Ceará</option>
                                                <option value="DF">Conselho Seccional - Distrito Federal</option>
                                                <option value="ES">Conselho Seccional - Espirito Santo</option>
                                                <option value="GO">Conselho Seccional - Goiás</option>
                                                <option value="MA">Conselho Seccional - Maranhão</option>
                                                <option value="MT">Conselho Seccional - Mato Grosso</option>
                                                <option value="MS">Conselho Seccional - Mato Grosso do Sul</option>
                                                <option value="MG">Conselho Seccional - Minas Gerais</option>
                                                <option value="PA">Conselho Seccional - Pará</option>
                                                <option value="PB">Conselho Seccional - Paraíba</option>
                                                <option value="PR">Conselho Seccional - Paraná</option>
                                                <option value="PE">Conselho Seccional - Pernambuco</option>
                                                <option value="PI">Conselho Seccional - Piauí</option>
                                                <option value="RJ">Conselho Seccional - Rio de Janeiro</option>
                                                <option value="RN">Conselho Seccional - Rio Grande do Norte</option>
                                                <option value="RS">Conselho Seccional - Rio Grande do Sul</option>
                                                <option value="RO">Conselho Seccional - Rondônia</option>
                                                <option value="RR">Conselho Seccional - Roraima</option>
                                                <option value="SC">Conselho Seccional - Santa Catarina</option>
                                                <option value="SP">Conselho Seccional - São Paulo</option>
                                                <option value="SE">Conselho Seccional - Sergipe</option>
                                                <option value="TO">Conselho Seccional - Tocantins</option>
                                            </select>

                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputAddress">OAB N°:</label>
                                            <input id="cpf" name="oab"value="<?php echo $resultado['oab_numero']; ?>" placeholder="" class="form-control input-md" required="" type="text" maxlength="10" pattern="[0-9]+$">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4">Data de Expedição:</label>
                                            <input id="exped_advogado" value="<?php echo $resultado['data_expedicao']; ?>" name="dtexped" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4">Data de Validade:</label>
                                            <input id="validade_advogado" value="<?php echo $resultado['data_validade']; ?>" name="dtval" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                                        </div>

                                    </div>
                                    <div class="form-group col-md-16" align="center">
                                        <div class="form-group col-md-16" align="center">
                                            <label for="inputAddress">Área de atuação:</label>
                                            <select required id="Estado Civil" name="caso" class="form-control">
                                                <option ><?php echo $resultado['tipo_caso'] ?> </option>
                                                <option >Direito Empresarial</option>
                                                <option >Direito da Tecnologia da Informação</option>
                                                <option >Direito do Consumidor</option>
                                                <option >Direito Contratual</option>
                                                <option >Direito Penal</option>
                                                <option >Direito Trabalhista</option>
                                                <option >Direito Tributário</option>
                                                <option >Direito Familiar</option>
                                                <option >Outros</option>
                                            </select>
                                        </div>  <div class="form-row">

                                        </div>

                                    </div>
                                    <div class="form-group" align="center">
                                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                                        <div class="col-md-8">
                                            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Atualizar</button>
                                            <button id="Cancelar" onClick="history.go(-1)" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>

                                        </div>
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </form>
<?php } ?>

</div>






<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->



<!-- Custom scripts for all pages-->
<!--<script src="js/sb-admin.min.js"></script> -->


</body>

</html>
