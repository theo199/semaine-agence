<?php
//Connexion à la base de données
//(via PDO, utilisez la méthode de votre choix comme le type de base de données de votre choix)
$pdo = new PDO(
    'mysql:host=localhost;dbname=test2', 'root', '');
	
//On vérifie que l'utilisateur a bien envoyé les informations demandées 
if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password2"])){
	//On vérifie que password et password2 sont identiques
	if($_POST["password"] == $_POST["password2"]){
		//On utilise alors notre fonction password_hash :
		$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
		//Puis on stock le résultat dans la base de données :
		$query = $pdo->prepare('INSERT INTO students (username, password) VALUES(:username, :password);');
		$query->bindParam(':username', $_POST["username"]);
		$query->bindParam(':password', $hash);
		$query->execute();
		header('Location: index.php');
		exit();
	}
}
?>