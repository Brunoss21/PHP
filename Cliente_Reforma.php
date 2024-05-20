<?php
include_once 'Serviços_Reforma.php';

class Cliente_Reforma implements Serviços_Reforma
{
	private $mão_obra;
	private $material;
	private $orçamento;
	private $abatimento = Serviços_Reforma::desconto;
	
	//implementa métodos da interface Serviços_Reforma
	public function troca_pisos()
	{
		echo "<br>\ntroca de pisos antigos por 4 metros quadrados de piso de ardósia";
	}
	
	public function faz_pintura()
	{
		echo "<br>\n pintura do teto com esmalte sintético e limpza dos azulejos da parece";
	}
	
	public function troca_lâmpadas()
	{
		echo "<br>\n retirar lãmpadas incandescentes e instalar lãmpadas de led 18W com revisão da fiação";
	}
	
	public function faz_orçamento($mão_obra, $material)
	{
		return $orçamento = $mão_obra + $material - $this->abatimento;
	}
}
?>