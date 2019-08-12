<?php

class Movimentacao {
	public $origem;
	public $destino;
	public $paradas;
	public function __construct($origem, $destino, $paradas) {
		$this->origem = $origem;
		$this->destino = $destino;
		$this->paradas = $paradas;
	}
}

?>
