<?php

	//Funciones sin parametros
	function nombre()
	{
		echo "Ricardo<br>";
	}
	nombre();

	

	//Funciones con parametros
	function loquesea($variable)
	{
		echo $variable;
	}
	loquesea("Parangutirimicuaro<br>");

	


	//Funciones con return
	function retorno($retornar)
	{
		return $retornar;
	}
	retorno("El señor de los anillos, el retorno del rey");
?>