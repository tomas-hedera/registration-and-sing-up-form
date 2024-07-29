document.addEventListener('DOMContentLoaded', function(){
	const registrBtn = document.getElementById('registrBtn');
	const formContainer = document.getElementById('formContainer');

	registrBtn.addEventListener('click', function(){
		formContainer.classList.add('visible');
	});
});

document.addEventListener('DOMContentLoaded', function(){
	const signinBtn = document.getElementById('signinBtn');
	const formContainerRight = document.getElementById('formContainerRight');

	signinBtn.addEventListener('click', function(){
		formContainerRight.classList.add('visibleRight');
	});
}); 