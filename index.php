<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/reset.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">

	<title></title>
</head>

<body>
<!-- tlacitka registrovat a prihlasit-->
	<div class="prihlaseni">

		<button name="registrovat" id="registrBtn">Registrovat</button>
		<br>
		<button name="prihlasit" id="signinBtn">Přihlásit</button>

	</div>
<!-- kontaktni formular prijizdejici zleva-->
	<div id="formContainer">
		<form method="post" id="registerForm">
			<button id="closeRegister" class="closeBtn">X</button>
			<h2>Registrace</h2>
			<div>
				<label for="jmeno">Jméno:</label>
				<input type="text" name="jmeno" id="jmeno">
			</div>

			<div>
				<label for="prijmeni">Příjmení:</label>
				<input type="text" name="prijmeni" id="prijmeni">
			</div>

			<div>
				<label for="email">Email:</label>
				<input type="email" name="emaill" id="emailRegistr">
			</div>

			<div>
				<label for="heslo">Heslo:</label>
				<input type="password" name="heslo" id="hesloRegistr">
			</div>


			<button name="registrovat">Registrovat</button>
		</form>
	</div>
	</div>

<!-- kontaktni formular prijizdejici zprava-->
 
	<div id="formContainerRight">
		<form method="post" id="sign-inForm">
			<button id="closeSignin" class="closeBtn">X</button>
			<h2>Přihlášení</h2>
			<div>
				<label for="email">Email:</label>
				<input type="email" name="email" id="emailSignin">
			</div>

			<div>
				<label for="heslo">Heslo:</label>
				<input type="password" name="heslo" id="hesloSignin">
			</div>

			 <button name="prihlasit">Přihlásit</button>
		</form>
	</div>

	<script src="./js/index.js"></script>
</body>

</html>