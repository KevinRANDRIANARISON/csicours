<?php

	//commentaire sur une ligne
/*
exemple de variable
*/
	$message = 'hello'; 
	$message2 = 'world';

	echo $message. ' ' .$message2."<br>";

//exemple des condition (if)
	$age = 18;
	if ($age < 18 ) {
		echo "pas bon";// la condition
	}else {
		echo 'yessss<br>';// code...
	}

//condition elseif

	if ($age < 18 ) {
		echo "pas bon";// la condition
	}elseif ($age == 18) {
		echo "bravo<br>";// code...
	}
	else {
		echo 'yessss<br>';// code...
	}

?>