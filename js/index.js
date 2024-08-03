document.addEventListener('DOMContentLoaded', function(){
    const registrBtn = document.getElementById('registrBtn');
    const formContainer = document.getElementById('formContainer');
    const signinBtn = document.getElementById('signinBtn');
    const formContainerRight = document.getElementById('formContainerRight');
    const closeRegister = document.getElementById('closeRegister');
    const closeSignin = document.getElementById('closeSignin');


	//validace

	function validateForm()
	{
		let isValid = true;

		//vycistí  staré chybové hlášky
		document.querySelectorAll('error').forEach(error =>{
			error.textContent = '';
		});

		//kontrola jmena
		document.getElementById('jmeno').value.trim();
		if(jmeno == '')
		{
			document.getElementById('errorJmeno').textContent = 'Jméno je povinné';
			isValid = false
		}


		//kontrola emailu
		const email = document.getElementById('emailRegistr').value.trim();
		if(email == '')
		{
			document.getElementById('errorEmail').textContent = 'Email je povinný';
			isValid = false;
		}
		else if (!validateEmail(email))
		{
			document.getElementById('errorEmail').textContent = 'Email není platný';
			isValid = false
		}

		//kontrola telefoniho cisla
		const telcislo = document.getElementById('telcislo').value.trim();
		if(telcislo == '')
		{
			document.getElementById('errorTelcislo').textContent = 'Telefonní číslo je povinný';
			isValid = false;
		}

		
	}







    registrBtn.addEventListener('click', function(){
       if(!formContainer.classList.contains('visible'))
	   {
			formContainerRight.classList.remove('visibleRight');
			formContainer.classList.add('visible');
	   }
    });

    signinBtn.addEventListener('click', function(){
		if(!formContainerRight.classList.contains('visibleRight'))
		{
			formContainer.classList.remove('visible');
			formContainerRight.classList.add('visibleRight');
		}
	});

    closeRegister.addEventListener('click', function() {
        formContainer.classList.remove('visible');
    });

    closeSignin.addEventListener('click', function(){
        formContainerRight.classList.remove('visibleRight');
    });

	
});
