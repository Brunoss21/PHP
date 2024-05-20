<?php
include_once 'I_Aluno.php';

class Aluno implements I_Aluno
{
	private $Nome;
	private $Responsavel;
	
	//implementa métodos da intercace
	public function setNome($Nome)
	{
		$this->Nome = $Nome;
	}
	
	public function getNome()
	{
		return $this->Nome;
	}
	
	public function setResponsavel($Responsavel)
	{
		$this->Responsavel = $Responsavel;
	}
	
	public function getResponsavel()
	{
		return $this->Responsavel;
	}
	
	public function fazMatricula()
	{
		echo "<br>\nmatricula feita no 1º ano do Colégio Jardim das Flores pelo ";
	}
}
?>