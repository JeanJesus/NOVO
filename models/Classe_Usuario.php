<?php
    require_once 'Classe_Pessoa.php';
    
    class Usuario {

    private $table = 'login';
    private $primeiro_nome;
    private $segundo_nome;
    private $email;
    private $senha;

    public function getPrimeiro_nome() {
        return $this->primeiro_nome;
    }

    public function getSegundo_nome() {
        return $this->segundo_nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setPrimeiro_nome($primeiro_nome) {
        $this->primeiro_nome = $primeiro_nome;
    }

    public function setSegundo_nome($segundo_nome) {
        $this->segundo_nome = $segundo_nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function findAll() {
        $conn = getConection();
        $sql = "SELECT *FROM $this->table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function inserUser($user) {
        $conn = getConection();

        $sql = "INSERT INTO login(email,senha,primeiro_nome,ultimo_nome) VALUES(?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $this->email);
        $stmt->bindValue(2, $this->senha);
        $stmt->bindValue(3, $this->primeiro_nome);
        $stmt->bindValue(4, $this->segundo_nome);
        if ($stmt->execute()) {
            echo "<script>alert('USUARIO CADASTRADO COM SUCESSO!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=registro_user';</script>";
        }
    }
    
     public function deletarUsuario($id){
        $conn = getConection();
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id);
           if($stmt->execute()){
            echo "<script>alert('Usuario Excluido com Sucesso!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=Listar_Usuarios';</script>";
        }else{
            echo "<script>alert('ERRO!');</script>";
        }
        return $stmt->execute();
    }
    
      public function EncontrarUsuario($id){
           $conn = getConection();
        $sql = "SELECT *FROM $this->table WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
        
    }
    
    
     public function atualizarUsuario($id){
            //echo"estou recebendo $id";
         $conn = getConection();
        $sql = "UPDATE  $this->table SET email = :email, primeiro_nome = :primeiro_nome, ultimo_nome = :ultimo_nome WHERE id = :id";
       
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $this->getEmail());
        $stmt->bindParam(':primeiro_nome', $this->getPrimeiro_nome());
        $stmt->bindParam(':ultimo_nome', $this->getSegundo_nome());
        $stmt->bindParam(':id',$id);
        //$stmt->bindParam(':senha', $this->getSenha());       
                
        if($stmt->execute()){
            echo "<script>alert(' Usuário Atualizado com Sucesso!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=Listar_Usuarios';</script>";
        }else{
            echo "<script>alert(' Não foi possivel realizar a atualização!');</script>";
        } 
        
                
      
        
        
    }
    
    

}
