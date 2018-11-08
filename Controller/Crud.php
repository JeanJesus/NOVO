<?php
    require_once 'conexao.php';

abstract class Crud extends conexao{
    
    protected $table;
    abstract public function Insert();
    abstract public function update();
    
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
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = conexao::prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    
}

