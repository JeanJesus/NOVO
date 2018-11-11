<?php include_once('../Controller/config/verifica_login.php'); ?>
<?php include_once'../models/Classe_Agendamento.php'; ?>
<?php $agen = new Agendamento(); ?>
<div>
    <div id="content-wrapper">

        <div class="container-fluid">
            <div align="center">
                <img src="img/Logo.png" width="130px" height="100px">
            </div><br />

            <div>
                <div align="center">
                    
                     <?php
                        if (isset($_GET['item'])) {
                        $id = $_GET['id'];
                        
                        $resultado = $agen->EncontrarAgendamento($id);
                      ?>
                    
                    <form method="post" action="../Controller/atualizarAgendamento.php?id=<?php echo "$id"; ?>"> 
                        <div class="outside">

                            <div class="form-group">
                                <div class="form-group col-md-6" >
                                    <label for="inputPassword4" align="left">CPF - CLIENTE:</label>
                                    <input id="cpf" name="cpf" value="<?php echo $resultado['fk_cpf_cliente']; ?>" readonly="true" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                                </div>
                            </div>
                            <div class="form-group col-md-6" align="center">

                                <label for="inputAddress">Registro - Advogado Responsável:</label>
                                <input id="cpf" name="n_oab" value="<?php echo $resultado['fk_oab_advogado']; ?>" readonly="true" placeholder="N° OAB" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">

                            </div>
                            <div class="form-group col-md-6" align="center">
                                <label for="inputEmail4">Data de Audiência:</label>
                                <input id="exped_advogado" value="<?php echo $resultado['data_audiencia']; ?>" name="data_audiencia" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-6" >
                                    <label for="inputPassword4" align="left">Horario:</label>
                                    <input  type="time" value="<?php echo $resultado['horario']; ?>"  name="horario" class="form-control input-md">
                                </div>
                            </div>


                        </div>

                        <div class="form-group col-md-12" align="center">
                           <!-- <div class="form-group col-md-6" align="center">
                                <label for="inputAddress">Tipo de Caso:</label>
                                <select required id="Estado Civil" name="caso" readonly="true" class="form-control">
                                    <option ><?php echo $resultado['tipo_caso']; ?></option>
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
                            </div>  --> 
                           <div class="form-group">
                                <div class="form-group col-md-6" >
                                    <label for="inputPassword4" align="left">Tipo de Caso:</label>
                                    <input id="cpf" name="TEXT" value="<?php echo $resultado['tipo_caso']; ?>" readonly="true"  class="form-control input-md" required="" type="text" >
                                </div>
                            </div>
                           
                            
                           
                           
                            <div class="form-row">

                            </div> 
                           
                            <div class="form-group col-md-6">
                                <label for="comment">Descrição:</label>
                                <textarea  class="form-control" rows="5"  name="descricao"id="comment"><?php echo $resultado['descricao'] ; ?></textarea>
                            </div>

                        </div>



                        <div class="form-group" align="center">
                            <label class="col-md-2 control-label" for="Cadastrar"></label>
                            <div class="col-md-8">
                                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Atualizar</button>
                                <button id="Cancelar" name="Cancelar" onClick="history.go(-1)" class="btn btn-danger" type="Reset">Cancelar</button>

                            </div>
                            <br />
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


</form>
 <?php } ?>
</div>
