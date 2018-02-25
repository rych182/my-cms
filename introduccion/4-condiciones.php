<?php

$dia = "domingo";
	switch ($dia) {
		case 'viernes':
			echo "Es Viernes por la noche, voy a dormir llegando del trabajo";
			break;

		case 'sabado':
			echo "Es Sábado, voy a estudiar programación e ingles";
			break;
	
		case 'domingo':
			echo "Es Domingo, voy a hacer el aseo, las compras, la comida y descansar, mientras mas temprano salga, mejor, chance y las compras las pida con mi aplicación";
			break;

		default:
			echo "Voy a chambear";
			break;
	}

?>