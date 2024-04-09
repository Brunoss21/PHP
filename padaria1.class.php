<?php
class Padaria {
    private $nome;
    private $endereco;
    private $tipoPao;
    private $numeroFuncionarios;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setTipoPao($tipoPao) {
        $this->tipoPao = $tipoPao;
    }

    public function setNumeroFuncionarios($numeroFuncionarios) {
        $this->numeroFuncionarios = $numeroFuncionarios;
    }

 
    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getTipoPao() {
        return $this->tipoPao;
    }

    public function getNumeroFuncionarios() {
        return $this->numeroFuncionarios;
    }
}

?>