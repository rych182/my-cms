<?php

//Exercises to practice the funcions!
/*
    function suma(){
        return 2+2;
    }
     
    function suma2(){
        return 6+6;
    }
     
    function suma3($digito1, $digito2){
     
        $resultado = $digito1 + $digito2;
        
        echo $resultado;
    }
     
    suma3(suma(),suma2());
*/

//Una suma con echo 
    function suma1()
    {
    	return 2+2;
    }
    //suma1();

//Una suma con return
    function suma2()
    {
    	return 1+1;
    }
    
function suma3($num1,$num2)
{
	echo $num1 + $num2;
}
suma3(suma1(),suma2());
?>