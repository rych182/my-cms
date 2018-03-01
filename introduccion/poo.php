<?php
//Codigo espaguetti o imperativo
	$automovil1 = (object)["marca"=>"Toyota", "modelo"=>"Corolla"];
	$automovil2 = (object)["marca"=>"Hyundai", "modelo"=>"Accent Vision"];
	$automovil3 = (object)["marca"=>"Mazda", "modelo"=>"del modelo que sean", "color"=>"rojo"];

	function mostar($automovil,$carro,$pinshi)
	{
		echo "<p>Me gustan los autos $automovil->marca , modelo $automovil->modelo</p>";
		echo "<p style='color:blue;'>Pero están mas pinshi mergas los $carro->marca del modelo $carro->modelo ALV fierro pariente :v </p>";
		echo "<h2>Pero los mas vergas de todos son los $pinshi->marca $pinshi->modelo de color $pinshi->color</h2>";
	}
	mostar($automovil1,$automovil2,$automovil3);
?>
