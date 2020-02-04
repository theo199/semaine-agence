<?php
//Connexion à la base de données
$pdo = new PDO(
    'mysql:host=localhost;dbname=test2', 'root', '');
	
//vérifié que l'utilisateur a bien envoyé les informations demandées 
if(isset($_POST["username"]) && isset($_POST["password"])){
	//demander le hash pour cet utilisateur à notre base de données :
	$query = $pdo->prepare('SELECT password FROM students WHERE username = :username');
	$query->bindParam(':username', $_POST["username"]);
	$query->execute();
	$result = $query->fetch();
	$hash = $result[0];
	
	//Nous vérifions si le mot de passe utilisé correspond bien à ce hash à l'aide de password_verify :
	$correctPassword = password_verify($_POST["password"], $hash);
	
	if($correctPassword){
		//Si oui nous accueillons l'utilisateur identifié
		echo "Bienvenu ".$_POST["username"];
	}else{
		//Sinon nous signalons une erreur d'identifiant ou de mot de passe
		echo "login/password incorrect";
	}
}
?>