document.addEventListener('DOMContentLoaded', function(){
	const registrBtn = document.getElementById('registrBtn');
	const formContainer = document.getElementById('formContainer');
	const signinBtn = document.getElementById('signinBtn');
	const formContainerRight = document.getElementById('formContainerRight');
	const closeRegister = document.getElementById('closeRegister');
	const closeSignin = document.getElementById('closeSignin');

	registrBtn.addEventListener('click', function(){
		formContainer.classList.add('visible');
	});

	signinBtn.addEventListener('click', function(){
		formContainerRight.classList.add('visibleRight');
	});

	closeRegister.addEventListener('click', function() {
		formContainer.classList.remove('visible');
	});

	closeSignin.addEventListener('click', function(){
		formContainerRight.classList.remove('visibleRight')
	});


});

