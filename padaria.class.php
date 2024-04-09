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


$minhaPadaria = new Padaria();
$minhaPadaria->setNome("Padaria do João");
$minhaPadaria->setEndereco("Av. Principal, 123");
$minhaPadaria->setTipoPao("Francês");
$minhaPadaria->setNumeroFuncionarios(5);


echo "Nome da Padaria: " . $minhaPadaria->getNome() . "<br>";
echo "Endereço: " . $minhaPadaria->getEndereco() . "<br>";
echo "Tipo de Pão Vendido: " . $minhaPadaria->getTipoPao() . "<br>";
echo "Número de Funcionários: " . $minhaPadaria->getNumeroFuncionarios() . "<br>";
?>
