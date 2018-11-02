<?php


class Pessoa {
    protected $nome;
    protected $email;
    protected $data_nascimento;
    protected $cpf;
    protected $rg;
    protected $estado_civil;
    protected  $telefone; 
    
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


    public function mostrarNome(){
        echo $this->nome;
    }
   
    
    
    
}


class Cliente extends Pessoa{
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

    
    
    
}





class Advogado extends Pessoa{
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


    
}

class Agendamento{
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


    
    
    
    
}