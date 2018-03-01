<?php

class Computadoras
{
	
	public $marca;
	public $procesador;

	function imprimir()
	{
		echo "Me gustan las $this->marca porque tienen procesador $this->procesador y porque soy un puto hipster";
	}
}

$a = new Computadoras;
$a -> marca = "Apple";
$a -> procesador = "i5";
$a -> imprimir();

?>