<?php
    require_once 'Classe_Pessoa.php';

class Advogado extends Pessoa {

    private $table = 'tbl_002_advogados';
    private $seccional;
    private $n_oab;
    private $data_expedicao;
    private $data_validade;
    private $area_de_atuacao;

    public function getSeccional() {
        return $this->seccional;
    }

    public function getN_oab() {
        return $this->n_oab;
    }

    public function getData_expedicao() {
        return $this->data_expedicao;
    }

    public function getData_validade() {
        return $this->data_validade;
    }

    public function getArea_de_atuacao() {
        return $this->area_de_atuacao;
    }

    public function setSeccional($seccional) {
        $this->seccional = $seccional;
    }

    public function setN_oab($n_oab) {
        $this->n_oab = $n_oab;
    }

    public function setData_expedicao($data_expedicao) {
        $this->data_expedicao = $data_expedicao;
    }

    public function setData_validade($data_validade) {
        $this->data_validade = $data_validade;
    }

    public function setArea_de_atuacao($area_de_atuacao) {
        $this->area_de_atuacao = $area_de_atuacao;
    }

    public function inserAdvogado($adv) {
        $conn = getConection();
        $sql = "INSERT INTO $this->table (nome,cpf,data_nascimento,rg,estado_civil,telefone,seccional,oab_numero,data_expedicao,data_validade,tipo_caso) "
                . "VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->cpf);
        $stmt->bindValue(3, $this->data_nascimento);
        $stmt->bindValue(4, $this->rg);
        $stmt->bindValue(5, $this->estado_civil);
        $stmt->bindValue(6, $this->telefone);
        $stmt->bindValue(7, $this->seccional);
        $stmt->bindValue(8, $this->n_oab);
        $stmt->bindValue(9, $this->data_expedicao);
        $stmt->bindValue(10, $this->data_validade);
        $stmt->bindValue(11, $this->area_de_atuacao);
        if ($stmt->execute()) {
            echo "<script>alert('Advogado Adicionado com Sucesso!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=CadastrarAdvogados';</script>";
        }
    }
     public function ListarAdvogados() {

        $conn = getConection();
        $sql = "SELECT *FROM $this->table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
       public function deletarAdvogado($id){
        $conn = getConection();
        $sql = "DELETE FROM $this->table WHERE oab_numero = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id);
           if($stmt->execute()){
            echo "<script>alert('Advogado Excluido com Sucesso!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=Listar_Advogados';</script>";
        }else{
            echo "<script>alert('Erro! o Advogado pode estar agendado em uma audiencia. Remova o cadastro na guia de CONSULTAR/AGENDAMENTOS para realizar o procedimento de Exclusão');</script>";
            echo "<script>window.location = '../View/inicial.php?item=Listar_Advogados';</script>";           
        }
        return $stmt->execute();
    }

}