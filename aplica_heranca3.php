<?php
require_once 'Conta.class.php';
require_once 'Conta_Poupança1.php';
require_once 'Conta_Corrente1.php';

// criação de objetos tipo Conta_Corrente e Conta Poupança
$cc = new Conta_Corrente1(121268, "CC.33868.88", 1000, 800);
$cp = new Conta_Poupanca1(156620, "CC.8251.513",600.88);

	print "Conta Corrente: {$cc->getInfo()} <br>\n";
	print " Saldo atual: {$cc->getSaldo()} <br>\n";
	$cc->depositar(-500.90);
	print " Depósito de: - 500.90 <br>\n";
	print " Salado atual: {$cc->getSaldo()} <br>\n";
	$cc->retirar(80.66);
	print " Retirada de: 80.66 <br>\n";
	print " Salado atual: {$cc->getSaldo()} <br>\n";
	
	print "<br>\n Conta Poupança: {$cp->getInfo()} <br>\n";
	print " Salado atual: {$cp->getSaldo()} <br>\n";
	$cp->depositar(70.50);
	print " Depósito de: 70.50 <br>\n";
	print "Saldo atual: {$cp->getSaldo()} <br>\n";
	$cp->retirar(40.36);
	print " Retirada de: 40.36 <br>\n";
	print "Saldo atual: {$cp->getSaldo()} <br>\n";
?>
	