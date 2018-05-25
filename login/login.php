<?php

	/*session_start();
	
	$_SESSION['username2'] = $_POST['username2'];
	$_SESSION['pass2'] =  $_POST['pass2'];
	
	$ime1 = $_POST['username2'];
	$sifra1 = $_POST['pass2'];
	*/
	
	include("config.php");
	
	$upit = "SELECT * FROM `login` ";
	$result = mysqli_query($conn, $upit);
	
	while($red=mysqli_fetch_assoc($result) ){
		$ime = $red['username'];
		$sifra = $red['password'];
		
		echo $ime; echo "<Br />";
		echo $sifra; echo "<br />";
	}
	
	



?>