<?php

$frutas = array("Banana", "Maçã", "Pêssego", "Laranja", "Uva", "Abacaxi", "Melancia", "Manga");

$amostra = array_slice($frutas, 2, 4); 

echo "Amostra de frutas:<br>";
foreach ($amostra as $fruta) {
    echo $fruta . "<br>";
}
?>
