        <?php include_once('../Controller/config/verifica_login.php'); ?>
        <?php include_once '../models/Classe_Cliente.php'; ?>
        <?php $cli = new Cliente(); ?>
        <div id="content-wrapper">

            <div class="container-fluid">
                <div align="center">
                    <img src="img/Logo.png" width="130px" height="100px">
                </div><br />


              <?php   if(isset($_GET['item'])){
                  $id = $_GET['id'];
                  
                  $resultado = $cli->EncontrarCliente($id);
                  
                  ?>
                <form method="post" action="../Controller/atualizarCliente.php?id=<?php echo "$id"; ?>"> 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome:</label>
                            <input id="Nome" name="Nome_Cliente" placeholder="" value="<?php echo $resultado['nome_cliente']; ?>"  class="form-control input-md" required="" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Email:</label>
                            <input type="email" name="Email_Cliente" value="<?php echo $resultado['email']; ?>" class="form-control" id="inputAddress" placeholder="@email.com">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">Data de Nascimento:</label>
                            <input id="dtnasc" value="<?php echo $resultado['data_nascimento']; ?>"name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">CPF:</label>
                            <input id="cpf" name="cpf"value="<?php echo $resultado['cpf']; ?>"  placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">RG:</label>
                            <input id="cpf" value="<?php echo $resultado['rg']; ?>" name="rg" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress" >Estado Civil:</label>
                            <select required id="Estado Civil"  name="Estado_Civil"  class="form-control">
                                <option selected ><?php echo $resultado['estado_civil']; ?></option>
                                <option value="Solteiro(a)">Solteiro(a)</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                                <option value="Viuvo(a)">Viuvo(a)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Search input-->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">CEP:</label>
                            <div>
                                <input id="cep" value="<?php echo $resultado['cep']; ?>" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                            </div>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputEmail4">&emsp;</label>
                            <div>
                                <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                            </div>
                        </div>


                        <div class="form-group col-md-7">
                            <label for="inputAddress">Endereço:</label>
                            <input id="rua" name="endereco" value="<?php echo $resultado['endereco']; ?>" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                        </div>



                        <div class="form-group col-md-6">
                            <label for="inputAddress">Bairro:</label>
                            <input id="bairro" name="bairro"value="<?php echo $resultado['bairro']; ?>" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputAddress">Cidade:</label>
                            <input id="cidade" name="cidade" value="<?php echo $resultado['cidade']; ?>" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                        </div>


                        <div class="form-group col-md-3">
                            <label for="inputAddress">Estado:</label>
                            <input id="estado" name="estado" value="<?php echo $resultado['estado']; ?>" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                        </div>



                        <div class="form-group col-md-3">
                            <label for="inputAddress">N°:</label>
                            <input id="numero" name="numero" value="<?php echo $resultado['numero']; ?>" class="form-control" placeholder="" required=""  type="text">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="inputAddress">Complemento:</label>
                            <input id="numero" name="complemento" value="<?php echo $resultado['complemento']; ?>" class="form-control" placeholder="" required=""  type="text">
                        </div>

                    </div>





                    <!-- -->

                    <div class="form-row">


                        <div class="form-group col-md-3">
                            <label for="inputAddress">Escolaridade:</label>
                            <select required id="escolaridade"  name="escolaridade" class="form-control">
                                <option selected><?php echo $resultado['escolaridade']; ?></option>
                                <option value="Analfabeto">Analfabeto</option>
                                <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                                <option value="Fundamental Completo">Fundamental Completo</option>
                                <option value="Médio Incompleto">Médio Incompleto</option>
                                <option value="Médio Completo">Médio Completo</option>
                                <option value="Superior Incompleto">Superior Incompleto</option>
                                <option value="Superior Completo">Superior Completo</option>
                            </select>
                        </div>



                        <div class="form-group col-md-6">
                            <label for="inputCity">Profissão:</label>
                            <input id="profissao" value="<?php echo $resultado['profissao']; ?>" name="profissao" type="text" placeholder="" class="form-control input-md" required="">
                        </div>


                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Telefone:</label>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input id="prependedtext" value="<?php echo $resultado['telefone']; ?>" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                   OnKeyPress="formatar('## #####-####', this)">
                        </div>

                    </div>
            </div>



            <!-- Button (Double) -->
            <div class="form-group" align="center">
                <label class="col-md-2 control-label" for="Cadastrar"></label>
                <div class="col-md-8">
                    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Atualizar</button>
                    <button id="Cancelar" onClick="history.go(-1)" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                </div>
            </div>

        </div>


        </form>
     <?php } ?>




        </div>
        


        </body>

        </html>
