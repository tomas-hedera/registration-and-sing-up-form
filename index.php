<?php
$jmeno = "";
$email = "";
$telefoniCislo = "";
$spolecnost = "";
$heslo = "";
$hesloZnova = "";
$chyba = [];
$formVisible = false;



	

?>
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
				<label for="jmeno">Jméno a příjmení:</label>
				<input type="text" name="jmeno" id="jmeno" required>
			</div>
			<span class="error" id="errorJmeno"></span>

			<div>
				<label for="email">Email:</label>
				<input type="email" name="email" id="emailRegistr" required>
			</div>
			<span class="error" id="errorEmail"></span>

			<div>
				<label for="telcislo">Telefoní číslo:</label>
				<input type="text" name="telcislo" id="telcislo" required>
			</div>
			<span class="error" id="errorTelcislo"></span>

			<div>
				<label for="spolecnost">Název společnosti:</label>
				<input type="text" name="spolecnost" id="spolecnost" required>
			</div>
			<span class="error" id="errorSpolecnost"></span>


			<div>
				<label for="heslo">Heslo:</label>
				<input type="password" name="heslo" id="hesloRegistr" required>
			</div>
			<span class="error" id="errorHeslo"></span>


			<div>
				<label for="hesloznova">Potvrzení hesla:</label>
				<input type="password" name="hesloznova" id="hesloRegistrZnova" required>
			</div>
			<span class="error" id="errorHesloznova"></span>




			<button name="zaregistrovat">Registrovat</button>
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
				<input type="email" name="email" id="emailSignin" required>
			</div>
			<span class="error" id="errorEmail"></span>

			<div>
				<label for="heslo">Heslo:</label>
				<input type="password" name="heslo" id="hesloSignin" required>
			</div>
			<span class="error" id="errorHeslo"></span>


			 <button name="prihlasit">Přihlásit</button>
		</form>
	</div>

	<script src="./js/index.js"></script>
</body>

</html>