<?php
class Laranja extends Fruta
{
	protected $cor;
	
	public function __construct($f){ // acesso ao método construtor da superclasse fruta
		parent::__construct($f);
	}
	
	public function set_cor($cor){
		$this->cor = $cor;
	}
	
	public function get_cor(){
		return $this->cor;
	}
}
?>