<?php
//Connexion à la base de données
//(via PDO, utilisez la méthode de votre choix comme le type de base de données de votre choix)
$pdo = new PDO(
    'mysql:host=localhost;dbname=test2', 'root', '');

//On vérifie que l'utilisateur a bien envoyé les informations demandées 
if(isset($_POST["mail"]) && isset($_POST["number"]) && isset($_POST["ville"]) && isset($_POST["adress"]) && isset($_POST["password"]) && isset($_POST["nameC"]) && isset($_POST["surnameC"]) && isset($_POST["club"]) && isset($_POST["sport"])){
	$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
	$query = $pdo->prepare('INSERT INTO coach (mail, number, ville, adress, password, nameC, surnameC, club, sport) VALUES(:mail, :number, :ville, :adress, :password, :nameC, :surnameC, :club, :sport);');
		$query->bindParam(':mail', $_POST["mail"]);
		$query->bindParam(':number', $_POST["number"]);
		$query->bindParam(':ville', $_POST["ville"]);
        $query->bindParam(':adress', $_POST["adress"]);
		$query->bindParam(':password', $hash);
		$query->bindParam(':nameC', $_POST["nameC"]);
		$query->bindParam(':surnameC', $_POST["surnameC"]);
		$query->bindParam(':club', $_POST["club"]);
		$query->bindParam(':sport', $_POST["sport"]);
		$query->execute();
		header('Location: integration/index.php');
		exit();
	}

?>