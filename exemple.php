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

//switch case
	switch ($age) {
		case '10': //l'age est = a 10
			echo "trop jeune";// code...
		break;
		case '18': //l'age est = a 18
			echo "tu a l'age pile poile<br>";// code...
		break;
		
		default:
			echo "comprend pas";// code...
		break;
	}

//boucle comment definr une boucle
	//boucle for
for ($i=0;/*initialisation*/ $i < 5/*condition*/; $i++ /*incrémentation (+1 toujours a chaque fois)*/) { 
		echo 'numero boucle' .$i. ':'.$age." <br>";// code...
	}
	//boucle while
$a = 0;
while ($a < 5) {
	echo "number boucle WHILE: ".$a. ' je repete<br>';// code...
	$a++;
}

//manipulation des tablaux
	//Declaration d'un tableau numéroté

$tab = array(
	'test', 
	'abcd', 
	'1234');
print_r($tab);
$tab[0] = "azerty"; //modifie une case viser
print_r($tab);
$tab[] = "azerty"; //modifier la dernier case
print_r($tab);
echo "<br><br>";

//tableau associative
$tabAsso = array(
	'nom' => 'lebon', 
	'prenom' => 'jean-Kristof', 
	'id' => '1234');
print_r($tabAsso);
echo "<br><br>";
//ajouter un element du tableau
$tabAsso['nom'] = 'azerty';
print_r($tabAsso);
echo '<br><br>';
$tabAsso["adresse"] = '1234 azerty';
print_r($tabAsso);
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
//afficher un element de mon tableau (numeroté)

//utiliser la boucle FRO
	echo "<br><br>";
	echo "FOR<br>";
	if (condition) {
		// code...
	}
//afficher un element de mon tableau (associatif)
	echo "<br><br>";
	echo "<br><br>";
	foreach ($tabAsso as $value) {
		echo $value. '<br>';// code...
	}

	echo "<br><br>";
	echo "<br><br>";
	foreach ($tabAsso as $cle => $value) {
		echo $cle. " vaut ".$value. '<br>';// code...
	}

?>