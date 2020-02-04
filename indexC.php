<!DOCTYPE html>
<html>
	<head>
	<title>inscription coach</title>
	</head>
	<body>
	<h2>Enregistrement coach</h2>
	<a href = 'index.php'>inscription eleves </a>
	</br></br>
	<form action="registerC.php" method="POST">
		<label>Identifiant :</label>
		<input type="text" name="username" required /><br /><br />
		<label>Mot de passe :</label>
		<input type="password" name="password" required /><br /><br />
		<label>Retapez mot de passe :</label>
		<input type="password" name="password2" required /><br /><br />
		<input type="submit" />
	</form>
	<br /><hr />
	<h2>Connexion</h2>
	<form action="loginC.php" method="POST">
		<label>Identifiant :</label>
		<input type="text" name="username" required /><br /><br />
		<label>Mot de passe :</label>
		<input type="password" name="password" required /><br /><br />
		<input type="submit" />
	</form>
	</body>
</html>