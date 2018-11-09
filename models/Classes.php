<?php

include_once '../Controller/conexao.php';
//include_once 'conexao.php';

abstract class Pessoa {

    private $table = 'tbl_001_clientes';
    protected $nome;
    protected $email;
    protected $data_nascimento;
    protected $cpf;
    protected $rg;
    protected $estado_civil;
    protected $telefone;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getData_nascimento() {
        return $this->data_nascimento;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getEstado_civil() {
        return $this->estado_civil;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function mostrarNome() {
        echo $this->nome;
    }

}

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
            echo "<script>window.location = '..//View/inicial.php?item=CadastrarCliente';</script>";
        }
    }

}

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

}

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

}

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

}
