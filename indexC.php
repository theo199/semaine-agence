<!DOCTYPE html>
<html>
	<head>
	<title>Exemple - Mot de passe</title>
	</head>
	<body>
	<h2>Enregistrement</h2>
	<a href = 'index.php'>inscription eleves </a>
	</br></br>
	<form action="register.php" method="POST">
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
	<form action="login.php" method="POST">
		<label>Identifiant :</label>
		<input type="text" name="username" required /><br /><br />
		<label>Mot de passe :</label>
		<input type="password" name="password" required /><br /><br />
		<input type="submit" />
	</form>
	</body>
</html>