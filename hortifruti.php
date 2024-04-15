<?php
require_once 'Fruta.class.php';
require_once 'Laranja.php';
require_once 'Laranja_Bahia.php';

$f = new Laranja_Bahia("Laranja bahia está bem doce");
$f->set_arvore("laranjeira");
$f->set_nome_fruta("laranja bahia");
$f->set_preço(8.22);
$f->set_cor("amarelo");
echo nl2br("dá na arvore: ".$f->get_arvore()."\n");
echo nl2br("fruta: ".$f->get_nome_fruta()."\n");
echo nl2br("preço = $".$f->get_preço()." a dúzia"."\n");
echo nl2br("cor: ".$f->get_cor()."\n");
echo nl2br("\n");

$g = new Laranja("Laranja lima está azeda");
$g->set_arvore("laranjeira");
$g->set_nome_fruta("laranja lima");
$g->set_preço(6.05);
$g->set_cor("amarelo-esverdeada");
echo nl2br("dá na arvore: ".$f->get_arvore()."\n");
echo nl2br("fruta: ".$f->get_nome_fruta()."\n");
echo nl2br("preço = $".$f->get_preço()." a dúzia"."\n");
echo nl2br("cor: ".$f->get_cor()."\n");
echo nl2br("\n");

$h = new Fruta("Maçã argentina está bem grande ");
$h->set_arvore("macieira");
$h->set_nome_fruta("maçã");
$h->set_preço(12.66);
echo nl2br("dá na arvore: ".$f->get_arvore()."\n");
echo nl2br("fruta: ".$f->get_nome_fruta()."\n");
echo nl2br("preço = $".$f->get_preço()." a dúzia"."\n");
echo nl2br("\n");

?>

