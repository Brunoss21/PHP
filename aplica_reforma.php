<?php
include_once 'Cliente_Reforma.php';

{
$cr = new Cliente_Reforma;
echo "<br>\n SERVIÇOS DA REFORMA DO BANHEIRO";
$cr -> troca_pisos();
$cr -> faz_pintura();
$cr -> troca_lâmpadas();
echo "<br>\n valor total da reforma R$ " . $cr -> faz_orçamento(2300.99, 3464.88);
}
?>