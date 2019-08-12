<?php



require("no.php");
//AB5, BC4, CD8, DC8, DE6, AD5, CE2, EB3, AE7
	$NoCidade = new No();
	
	
	$NoCidade->incluirNo("a", "b", 5);
	$NoCidade->incluirNo("a", "e", 7);
	$NoCidade->incluirNo("a", "d", 5);
	
	$NoCidade->incluirNo("b", "c", 4);
	
	$NoCidade->incluirNo("c", "d", 8);
	$NoCidade->incluirNo("c", "e", 2);
	
	$NoCidade->incluirNo("d", "c", 8);
	$NoCidade->incluirNo("d", "e", 6);
	
	$NoCidade->incluirNo("e", "b", 6);

	
	
	$NoCidade->incluirNo("e", "b", 3);
	



	$listaCidade = 0;
	foreach($NoCidade->distanciaOrigem("a") as $distacia){
		$listaCidade = $distacia ;
	}


		var_dump( $distacia);



	 $listaRotas = $NoCidade->distanciaCidade($listaCidade, "c");
	 
	 var_dump($listaRotas);
	 
	 
	


?>
