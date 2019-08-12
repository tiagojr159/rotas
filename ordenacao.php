<?php
include_once'OrdenacaoLista.php';

class Ordenacao {
	
	private $tamanho;
	private $lOirgem;
	private $comparar;
	
	function __construct() {
		$this->tamanho = 0;
		$this->lOirgem = null;
		$this->lDestino = null;
	}

	
	
	function verificarDistancia($a, $b) {
		return $a->data[0] - $b->data[0];
	}
	
	function incluir($lista) {
		$this->tamanho = $this->tamanho + 1;
		
		if($this->lOirgem == null) {
			$this->lOirgem = new OrdenacaoLista($lista);
		} else {
			$node = $this->lOirgem;

			$no1 = new OrdenacaoLista($lista);
			$no2 = null;
			$added = false;
			
			while($node) {
				if ($this->verificarDistancia($no1, $node) < 0) {
					$no1->next = $node;
					if ($no2 == null) {
						$this->lOirgem = $no1;
					} else {
						$no2->next = $no1;
					}
					$added = true;
					break;
				}
				$no2 = $node;
				$node = $node->next;
			}
			if (!$added) {
				$no2->next = $no1;
			}
		}
		echo"<pre>";
		echo"<pre>";
	}
	
	
	

	function tamanho() {
		return $this->tamanho;
	}
	
	function posicao() {
		return $this->lOirgem->data;
	}
	
	function eliminar() {
		$lista = $this->posicao();
		$this->tamanho = $this->tamanho - 1;
		$this->lOirgem = $this->lOirgem->next;
		return $lista;
	}
}
