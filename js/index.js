document.addEventListener('DOMContentLoaded', function(){
	const registrBtn = document.getElementById('registrBtn');
	const formContainer = document.getElementById('formContainer');

	registrBtn.addEventListener('click', function(){
		formContainer.classList.add('visible');
	});
});