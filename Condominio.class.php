<?php
class Condominio {

    private $nome;
    private $endereco;
    private $numeroApartamentos;
    private $quantidadeBlocos;
    private $sindico;


    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setNumeroApartamentos($numeroApartamentos) {
        $this->numeroApartamentos = $numeroApartamentos;
    }

    public function setQuantidadeBlocos($quantidadeBlocos) {
        $this->quantidadeBlocos = $quantidadeBlocos;
    }

    public function setSindico($sindico) {
        $this->sindico = $sindico;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getNumeroApartamentos() {
        return $this->numeroApartamentos;
    }

    public function getQuantidadeBlocos() {
        return $this->quantidadeBlocos;
    }

    public function getSindico() {
        return $this->sindico;
    }
}

$condominio = new Condominio();
$condominio->setNome("Residencial Senador");
$condominio->setEndereco("Av. Senador Feijó, 350");
$condominio->setNumeroApartamentos(100);
$condominio->setQuantidadeBlocos(3);
$condominio->setSindico("Bruno Santos");


echo "Nome do Condomínio: " . $condominio->getNome() . "<br>";
echo "Endereço: " . $condominio->getEndereco() . "<br>";
echo "Número de Apartamentos: " . $condominio->getNumeroApartamentos() . "<br>";
echo "Quantidade de Blocos: " . $condominio->getQuantidadeBlocos() . "<br>";
echo "Síndico: " . $condominio->getSindico() . "<br>";
?>
