<?php

require_once 'Automovel.class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $automovel = new Automovel();

    $automovel->setMarca($_POST["marca"]);
    $automovel->setCor($_POST["cor"]);
    $automovel->setModelo($_POST["modelo"]);
    $automovel->setPreco($_POST["preco"]);

    echo "<h2>Dados do Automovel:</h2>";
    echo "Marca: " . $automovel->getMarca() . "<br>";
    echo "Cor: " . $automovel->getCor() . "<br>";
    echo "Modelo: " . $automovel->getModelo() . "<br>";
    echo "Preco: R$ " . number_format($automovel->getPreco(), 2, ',', '.') . "<br>";
}
?>
