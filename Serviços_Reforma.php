<?php

interface Serviços_Reforma

{ //declaração dos métodos da interface
	public function troca_pisos();
	public function faz_pintura();
	public function troca_lâmpadas();
	public function faz_orçamento($mão_obra, $material);
 //declaração de constante (só PHP)
	const desconto = 100;
}
?>