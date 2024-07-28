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
	<div class="prihlaseni">
	
		<button name="registrovat" id="registrBtn">Registrovat</button>
		<br>
		<button name="prihlasit" id="sign-inBtn">Přihlásit</button>

	</div>

	<div id="formContainer">
		<form method="post" id="registerForm">
			<h2>Registrace</h2>
			<div>
			<label for="jmeno">Jméno</label>
			<input type="text" name="jmeno" id="jmeno">
			</div>
			
			<div>
			<label for="prijmeni">Příjmení</label>
			<input type="text" name="prijmeni" id="prijmeni">
			</div>
			
			<div>
			<label for="email">Email</label>
			<input type="email" name="emaill" id="email">
			</div>
			
			<div>
			<label for="heslo">Heslo</label>
			<input type="password" name="heslo" id="heslo">
			</div>
			

			<button name="registrovat">Registrovat</button>
		</form>
	</div>
	</div>

	<script src="./js/index.js"></script>
</body>
</html>