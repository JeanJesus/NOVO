<?php
    require_once 'Classe_Pessoa.php';
    
    class Agendamento {

    private $table = 'tbl_003_agendamentos';
    public $cpf_agendado;
    public $oabResponsavel;
    public $dataAudiencia;
    public $horario;
    public $tipoCaso;
    public $descricao;

    public function getCpf_agendado() {
        return $this->cpf_agendado;
    }

    public function getOabResponsavel() {
        return $this->oabResponsavel;
    }

    public function getDataAudiencia() {
        return $this->dataAudiencia;
    }

    public function getHorario() {
        return $this->horario;
    }

    public function getTipoCaso() {
        return $this->tipoCaso;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setCpf_agendado($cpf_agendado) {
        $this->cpf_agendado = $cpf_agendado;
    }

    public function setOabResponsavel($oabResponsavel) {
        $this->oabResponsavel = $oabResponsavel;
    }

    public function setDataAudiencia($dataAudiencia) {
        $this->dataAudiencia = $dataAudiencia;
    }

    public function setHorario($horario) {
        $this->horario = $horario;
    }

    public function setTipoCaso($tipoCaso) {
        $this->tipoCaso = $tipoCaso;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
     public function ListarAgendamento() {

        $conn = getConection();
        $sql = "SELECT *FROM $this->table INNER JOIN tbl_001_clientes ON tbl_001_clientes.cpf = tbl_003_agendamentos.fk_cpf_cliente "
                . "INNER JOIN tbl_002_advogados ON tbl_002_advogados.oab_numero = tbl_003_agendamentos.fk_oab_advogado";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    

    public function inserAgendamento($agen) {
        $conn = getConection();
        $sql = "INSERT INTO $this->table(fk_cpf_cliente,fk_oab_advogado,data_audiencia,horario,tipo_caso,descricao) VALUES(?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $this->cpf_agendado);
        $stmt->bindValue(2, $this->oabResponsavel);
        $stmt->bindValue(3, $this->dataAudiencia);
        $stmt->bindValue(4, $this->horario);
        $stmt->bindValue(5, $this->tipoCaso);
        $stmt->bindValue(6, $this->descricao);

        if ($stmt->execute()) {
            echo "<script>alert('AGENDAMENTO REALIZADO!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=CadastrarAgendamento';</script>";
        } else {
            echo "<script>alert('CPF OU N° OAB NÃO CADASTRADOS!, POR FAVOR, VERIFIQUE E TENTE NOVAMENTE!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=CadastrarAgendamento';</script>";
        }
    }

      public function deletarAgendamento($id){
        $conn = getConection();
        $sql = "DELETE FROM $this->table WHERE id_agendamento = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id);
           if($stmt->execute()){
            echo "<script>alert('Agendamento Excluido com Sucesso!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=Listar_Agendamentos';</script>";
        }else{
            echo "<script>alert('erro!');</script>";
        }
        return $stmt->execute();
    }

      public function EncontrarAgendamento($id){
        $conn = getConection();
        $sql = "SELECT *FROM $this->table WHERE id_agendamento = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
      
    }
    
     public function AtualizarAgendamento($id){
       $conn = getConection();
        $sql = "UPDATE $this->table SET data_audiencia = :data_audiencia, horario = :horario, tipo_caso = :caso, descricao = :desc WHERE id_agendamento = :id";
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':data_audiencia', $this->getDataAudiencia());
        $stmt->bindParam(':horario',  $this->getHorario());
        $stmt->bindParam(':caso', $this->getTipoCaso());
        $stmt->bindValue(':desc', $this->getDescricao());
        $stmt->bindValue(':id', $id);
        
         if($stmt->execute()){
            echo "<script>alert(' Agendamento Atualizado com Sucesso!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=Listar_Agendamentos';</script>";
        }else{
            echo "<script>alert(' Não foi possivel realizar a atualização!');</script>";
        } 
        
                
         
        
    }
    
    
    
    
 }