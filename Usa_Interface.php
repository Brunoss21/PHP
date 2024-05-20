<?php
include_once 'Aluno.php';

{
$f = new Aluno;
$f -> setNome('Ricardo Silva');
$f -> setResponsavel('Pai');
echo "<br>\nNome do Aluno: ". $f->getNome();
$f -> fazMatricula();
echo $f->getResponsavel();
}
?>