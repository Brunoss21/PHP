<?php
$funcionarios = array(
    array('Renato', 1500.00),
    array('João', 2100.00),
    array('Paulo', 5800.00),
    array('Juliana', 3400.00),
    array('Sarah', 1750.00)
);

foreach ($funcionarios as $funcionario) {
    $nome = $funcionario[0]; 
    $salario = $funcionario[1];
    
    if ($salario > 3000.00) {
        
        echo $nome . "<br>";
    }
}
?>
