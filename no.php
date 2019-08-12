<?php


require_once("ordenacao.php");


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

class No {
    public $nos = array();

	public function incluirNo($origem, $destino, $paradas = 0) {
	
		if (!isset($this->nos[$origem])) {
			$this->nos[$origem] = array();
		}
		array_push($this->nos[$origem], new movimentacao($origem, $destino, $paradas));
	
	}



public function distanciaOrigem($noOrigem) {
	var_dump($noOrigem);
		$ListaCidade = array();
		$ListaCidade[$noOrigem] = 0;
		
		$visitado = array();
		
		$previous = array();
		
		$ordenarueue = array();
		$ordenar = new Ordenacao("");
		$ordenar->incluir(array($ListaCidade[$noOrigem], $noOrigem));
		
		$nos = $this->nos;
		
		while($ordenar->tamanho() > 0) {

			list($distance, $posicao) = $ordenar->eliminar();
			
			if (isset($visitou[$posicao])) {
				continue;
			}
			$visitou[$posicao] = True;
			
			if (!isset($nos[$posicao])) {
				print "não exist rota";
			}
			
			foreach($nos[$posicao] as $movimentacao) {
				$alt = $ListaCidade[$posicao] + $movimentacao->paradas;
				$destino = $movimentacao->destino;
				if (!isset($ListaCidade[$destino]) || $alt < $ListaCidade[$destino]) {
					$lista[$destino] = $posicao;
					$ListaCidade[$destino] = $alt;
					$ordenar->incluir(array($ListaCidade[$destino], $destino));
				}
			}
		}
		return array($ListaCidade, $lista);
	}
	
public function distanciaCidade($listaCidade, $destinoFinal) {
	$listaRota = "";
		$rota = "i";
		foreach($listaCidade as $cidade){
			if(!empty(($listaCidade[$rota]))){
				$listaRota .= $rota;
				$rota = $listaCidade[$rota];
			}	
		}
		return $listaRota;
	}
}










?>



