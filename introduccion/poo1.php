<?php

	class Automovil{
		/*PROPIEDADES:
		Son las caracteristicas que puede tener un objeto*/
		public $marca;
		public $modelo;
		/*METODO
		Es el algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer.
		La única diferencia entr método y función, es que llamamos método a las FUNCIONES de una clase(en la POO),
		mientras que llamamos funciones, a los algoritmos de la programación estructurada
		*/
		public function mostrar()
		{
			echo "<p>Hola! soy un $this->marca , modelo $this->modelo</p>";
		}
	}

	class ClassHijo extends Automovil
	{
		
		function __construct(argument)
		{
			# code...
		}
	}

	$a = new Automovil();
	$a -> marca = "Toyota";
	$a -> modelo = "Corolla";
	$a -> mostrar();

	$b = new Automovil();
	$a -> marca = "Mazda";
	$a -> modelo = "Mazda 6";
	$a -> mostrar();

	/*
	PRINCIPIOS DE LA POO

	#ABSTRACCION: Nuevos tipos de datos( el que tu quieras, tu lo creas)
	#ENCAPSULACIÓN: Organizar el código en grupos lógicos
	#OCULTACIÓN: Ocultar detalles de implementacion y exponer solo los detalles que sean necesarios
	para el resto del sistema
	*/

	/*
	Mi explicación:
	La POO ayuda en la seguridad informática, es indispensable que tu aplicación en PHP este protegida
	de ataques de hackers o robots, software malicioso que pueda dañar un sitio web, si un sitio web no esta protegido
	se le puede robar información de la base de datos y dañar la estructura.

	Todo esto porque una clase puede estar aislada en un archivo y los objetos en otro archivo, es la manera
	de defenderse, mientras que en el código espaguetti todo esta en un mismo archivo

	Abstracción: cuando tu creas tu objeto
	Encapsulación: una primer capsula que es nuestra clase y una segunda capsula que es nuestro objeto
	Ocultamiento: Solo mostramos los datos que queramos
	*/

?>