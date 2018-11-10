<?php
    require_once 'conexao.php';

abstract class Crud extends conexao{
    
    protected $table;
    abstract public function Insert();
    //abstract public function update();
    
    public function find($id){
        $sql = "SELECT *FROM $this->table WHERE id = :id";
        $stmt = conexao::prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
        
    }
    
    
    public function findAll(){
        $sql = "SELECT *FROM $this->table";
        $stmt = conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function delete(){
        $conn = getConection();
        $sql = "DELETE FROM $this->table WHERE cpf = :cpf";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    
   /* public function update(){
        $conn = getConection();
        $sql = "UPDATE TABLE $this->table SET nome_cliente = :nome, email = :email, data_nascimento = :data, cpf = :cpf, "
                . "rg = :rg, estado_civil = :estado_civil, cep = :cep, endereco = :endereco, bairro = :bairro, cidade =:cidade, estado = :estado, numero = :numero, complemento = :complemento, escolaridade = :escolaridade, profissao =:profissao, telefone = :telefone";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome_cliente')
        
    }*/
    
}

