<?php
//Connexion à la base de données
$pdo = new PDO(
    'mysql:host=localhost;dbname=test2', 'root', '');
	
//vérifié que l'utilisateur a bien envoyé les informations demandées
if(isset($_POST["surnameC"]) && isset($_POST["password"])){
	//demander le hash pour cet utilisateur à notre base de données :
	$query = $pdo->prepare('SELECT password FROM coach WHERE surnameC = :surnameC');
	$query->bindParam(':surnameC', $_POST["surnameC"]);
	$query->execute();
	$result = $query->fetch();
	$hash = $result[0];
	
	//Nous vérifions si le mot de passe utilisé correspond bien à ce hash à l'aide de password_verify :
	$correctPassword = password_verify($_POST["password"], $hash);
	
	if($correctPassword){
		//Si oui nous accueillons l'utilisateur identifié
		echo "Bienvenu ".$_POST["surnameC"];
	}else{

		echo "login/password incorrect";
	}
}
?>