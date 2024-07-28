<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/reset.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="./js/index.js"></script>
	<title></title>
</head>
<body>
	<div class="prihlaseni">
	<form method="post">
		<button name="registrovat" id="registrBtn">Registrovat</button>
		<br>
		<button name="prihlasit" id="sign-inBtn">Přihlásit</button>
	</form>

	<div class="formContainer">
		<form method="post" id="registerForm">
			<h2>Registrace</h2>
			<label for="jmeno">Jméno</label>
			<input type="text" name="jmeno" id="jmeno">

			<label for="prijmeni">Příjmení</label>
			<input type="text" name="prijmeni" id="prijmeni">

			<label for="email">Email</label>
			<input type="email" name="emaill" id="email">

			<label for="heslo">Heslo</label>
			<input type="password" name="heslo" id="heslo">

			<button name="registrovat">Registrovat</button>
		</form>
	</div>
	</div>
</body>
</html>