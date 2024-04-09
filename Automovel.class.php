<?php
class Automovel {
    private $marca;
    private $cor;
    private $modelo;
    private $preco;
	
    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPreco() {
        return $this->preco;
    }
}
?>
