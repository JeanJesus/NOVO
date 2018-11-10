<?php
    require_once 'Classe_Pessoa.php';
    
    class Cliente extends Pessoa {

    private $table = 'tbl_001_clientes';
    private $escolaridade;
    private $profissao;
    private $cep;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $numero;
    private $complemento;

    public function getEscolaridade() {
        return $this->escolaridade;
    }

    public function getProfissao() {
        return $this->profissao;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setEscolaridade($escolaridade) {
        $this->escolaridade = $escolaridade;
    }

    public function setProfissao($profissao) {
        $this->profissao = $profissao;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function findAllCli() {

        $conn = getConection();
        $sql = "SELECT *FROM $this->table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insertCliente($cli) {
        $conn = getConection();
        $sql = "INSERT INTO $this->table(nome_cliente,email,data_nascimento,cpf,rg,estado_civil,cep,endereco,bairro,cidade,estado,numero,complemento,escolaridade,profissao,telefone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->email);
        $stmt->bindValue(3, $this->data_nascimento);
        $stmt->bindValue(4, $this->cpf);
        $stmt->bindValue(5, $this->rg);
        $stmt->bindValue(6, $this->estado_civil);
        $stmt->bindValue(7, $this->cep);
        $stmt->bindValue(8, $this->endereco);
        $stmt->bindValue(9, $this->bairro);
        $stmt->bindValue(10, $this->cidade);
        $stmt->bindValue(11, $this->estado);
        $stmt->bindValue(12, $this->numero);
        $stmt->bindValue(13, $this->complemento);
        $stmt->bindValue(14, $this->escolaridade);
        $stmt->bindValue(15, $this->profissao);
        $stmt->bindValue(16, $this->telefone);

        if ($stmt->execute()) {
            echo "<script>alert('Cliente Adicionado com Sucesso!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=CadastrarCliente';</script>";
        }
        
    }
    public function deletarCliente($id){
        $conn = getConection();
        $sql = "DELETE FROM $this->table WHERE id_clientes = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id);
           if($stmt->execute()){
            echo "<script>alert('Cliente Excluido com Sucesso!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=Listar_Clientes';</script>";
        }else{
            echo "<script>alert('erro! O Cliente pode estar agendado em uma audiencia. Remova o cadastro na guia de CONSULTAR/AGENDAMENTOS para realizar o procedimento de exclusão.');</script>";
        }
        return $stmt->execute();
    }
    
 
      public function EncontrarCliente($id){
        $conn = getConection();
        $sql = "SELECT *FROM $this->table WHERE id_clientes = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
      
    }
    
      public function atualizarCliente($id){
            //echo"estou recebendo $id";
         $conn = getConection();
        $sql = "UPDATE  $this->table SET nome_cliente = :nome, email = :email, data_nascimento = :data, cpf = :cpf, "
                . "rg = :rg, estado_civil = :estado_civil, cep = :cep, endereco = :endereco, bairro = :bairro, "
                . "cidade =:cidade, estado = :estado, numero = :numero, complemento = :complemento,"
                . " escolaridade = :escolaridade, profissao =:profissao, telefone = :telefone WHERE id_clientes =:id"; 
       
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome',  $this->nome);
        $stmt->bindParam(':email',  $this->email);
        $stmt->bindParam(':data',$this->data_nascimento);
        $stmt->bindParam(':cpf',$this->cpf);
        $stmt->bindParam(':rg',$this->rg);
        $stmt->bindParam(':estado_civil',$this->estado_civil);
        $stmt->bindParam(':cep',$this->cep);
        $stmt->bindParam(':endereco',$this->endereco); 
        $stmt->bindParam(':bairro',$this->bairro);
        $stmt->bindParam(':cidade',$this->cidade);
        $stmt->bindParam(':estado',$this->estado);
        $stmt->bindParam(':numero',$this->numero);
        $stmt->bindParam(':complemento',$this->complemento);
        $stmt->bindParam(':escolaridade',$this->escolaridade);
        $stmt->bindParam(':profissao',$this->profissao);
        $stmt->bindParam(':telefone',$this->telefone);
        $stmt->bindParam(':id',$id);
        
        if($stmt->execute()){
            echo "<script>alert(' Cliente Atualizado com Sucesso!');</script>";
            echo "<script>window.location = '../View/inicial.php?item=Listar_Clientes';</script>";
        }else{
            echo "<script>alert(' Não foi possivel realiar a atualização!');</script>";
        } 
        
                
      
        
        
    }
    

}
