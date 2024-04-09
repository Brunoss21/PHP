<?php

$frutas = array("Banana", "Maçã", "Pêssego", "Laranja");


sort($frutas);


$total_elementos = count($frutas);

echo "Número total de frutas após ordenação: " . $total_elementos . "<br>";


echo "Frutas em ordem alfabética:<br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>
