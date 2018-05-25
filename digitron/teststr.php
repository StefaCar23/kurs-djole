<?php

	/*if(isset($_GET['numero1']) && isset($_GET['numero2']) ){
		$broj1 = $_GET['numero1'];
		$broj2 = $_GET['numero2'];
		
		echo $broj1 + $broj2;
		
	} */
	
	$br1 = trim($_GET['number1']);
	$br2 = trim($_GET['number2']);
	
	
	switch($_GET['button']){
		case "+" : 
		if(empty($br1) || empty($br2) ){
			echo "Molimo vas da unesete sve podatke!";
		} else{
			echo $br1 + $br2;
		}
		break;
		case "-" : 
		if(empty($br1) || empty($br2) ){
			echo "Molimo vas da unesete sve podatke!";
		} else{
			echo $br1 - $br2;
		} 
		break;
		case "*" : 
		if(empty($br1) || empty($br2) ){
			echo "Molimo vas da unesete sve podatke!";
		} else{
			echo $br1 * $br2;
		} 
		break;
		case "/" : 
		if(empty($br1) || empty($br2) ){
			echo "Molimo vas da unesete sve podatke!";
		} else{
			echo $br1 / $br2;
		}
		break;
		default : echo "Nije dobrao";
	}
	
	
	
	/*if($_GET['button'] == "+" ){
		if(empty($br1) || empty($br2)  ){
			echo "Unesi broj";
		}else{
			echo $br1 + $br2;
		}
	}*/
	
	
	
	
	


?>