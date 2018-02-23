<?php

//Se úeden sumar variables
	$suma = 5 + 5;
	$suma2 = 3 + 3;
	echo $suma + $suma2;
	echo "<br>";
	var_dump($suma);
	echo "<br><br>";

//Variables boleanas

	$variable = true;
	echo $variable;
	echo "<br>";
	var_dump($variable);
	echo "<br><br>";
//Variables arreglo

	$colores = array("rojo","azul","verde",5);
	echo $colores[0] . $colores[1];
	echo "<br>";
	var_dump($colores);
	echo "<br><br>";
//Variables arreglo con propiedades

	$verduras = array("verdura1" => "lechuga", "verdura2" => "cebolla");
	//print_r($verduras); , así se puede imprimir todo el arreglo
	echo "Quiero una $verduras[verdura1] y un kilo de $verduras[verdura2] morada.";
	echo "<br>";
	var_dump($verduras);
	echo "<br><br>";

	$frutas = (object)["fruta1"=>"fresa", "fruta2"=>"platano"];
	echo "Me da un kilo de $frutas->fruta1 y 2 de $frutas->fruta2 , tengo antojo de un coctel con crema ALV :v ";
	echo "<br>";
	var_dump($frutas);
	echo "<br><br>";	
?>