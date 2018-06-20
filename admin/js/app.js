
let pass = document.getElementById('new_pass');
let confirmPass = document.getElementById('confirm_pass');
let eye = document.querySelectorAll('.eye');

confirmPass.addEventListener('keyup', () => {
	let pass1 = pass.value;
	let pass2 = confirmPass.value;
	if (pass2.length >= 3) {
		if (pass1 == pass2) {
			$(confirmPass).removeClass('is-invalid');
			$(confirmPass).addClass('is-valid');
		} else {
			$(confirmPass).addClass('is-invalid');
		}
	}
	
});
eye1 = eye[0];
eye2 = eye[1];
eye1.addEventListener('mousedown', ()=>{
	pass.type = 'text';
});
eye1.addEventListener('mouseup', () => {
	pass.type = 'password';
});
eye2.addEventListener('mousedown', () => {
	confirmPass.type = 'text';
});
eye2.addEventListener('mouseup', () => {
	confirmPass.type = 'password';
});