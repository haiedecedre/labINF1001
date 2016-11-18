<?php
	$nomFichier = "data.txt";
	if (file_exists($nomFichier)){
		$fichier = fopen($nomFichier, "a");
	}else{
		$fichier = fopen($nomFichier, "x");
	}
	$ligne =$_POST["firstname"].",". $_POST["lastname"].",". $_POST["university"].",". $_POST["department"].",". $_POST["sexe"].",". $_POST["age"].
	 "\n";
	$ligne = $ligne.$_POST["comments"].
	fputs($fichier, $ligne);
	fclose($fichier);

	header('Location: 'http://localhost/at8/index.php')

?>