<?php

include_once '../Controller/conexao.php';
include_once 'conexao.php';

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
