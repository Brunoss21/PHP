<?php
require_once 'condominio1.class.php';
require_once 'padaria1.class.php';


$condominio = new Condominio();
$condominio->setNome("Condomínio Residencial XPTO");
$condominio->setEndereco("Rua das Palmeiras, 123");
$condominio->setNumeroApartamentos(100);
$condominio->setQuantidadeBlocos(5);
$condominio->setSindico("José Silva");


$padaria = new Padaria();
$padaria->setNome("Padaria do João");
$padaria->setEndereco("Av. Principal, 456");
$padaria->setTipoPao("Francês");
$padaria->setNumeroFuncionarios(5);

echo "Informações do Condomínio:<br>";
echo "Nome: " . $condominio->getNome() . "<br>";
echo "Endereço: " . $condominio->getEndereco() . "<br>";
echo "Número de Apartamentos: " . $condominio->getNumeroApartamentos() . "<br>";
echo "Quantidade de Blocos: " . $condominio->getQuantidadeBlocos() . "<br>";
echo "Síndico: " . $condominio->getSindico() . "<br>";

echo "<br>";

echo "Informações da Padaria:<br>";
echo "Nome: " . $padaria->getNome() . "<br>";
echo "Endereço: " . $padaria->getEndereco() . "<br>";
echo "Tipo de Pão Vendido: " . $padaria->getTipoPao() . "<br>";
echo "Número de Funcionários: " . $padaria->getNumeroFuncionarios() . "<br>";
?>
