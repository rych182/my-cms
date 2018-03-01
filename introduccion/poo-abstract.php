<?php

	abstract class servicio
	{
		abstract public function saludar($nombre);
		
		public function carta($nombre, $almuerzo)
		{
			echo $this->saludar($nombre);
			echo "Le puedo ofrecer: <br>";

			foreach ($almuerzo as $clave => $valor) {
				echo $clave.":  ".$valor."<br>";
			}
		}
		
	}

?>