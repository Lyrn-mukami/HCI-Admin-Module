const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');
const user = document.getElementById('user');
const pass = document.getElementById('pass');
const form = document.getElementById('form');

form.addEventListener('submit', (e) => {
	e.preventDefault();

	validateInputs();

});
const setError = (element, message) => {
	const outputBox = element.parentElement;
	const errorDisplay = outputBox.querySelector('.error');

	errorDisplay.innerText = message;
	outputBox.classList.add('error');
	outputBox.classList.add('success');


}

const validateInputs = () => {

	const fnameValue = fname.value.trim();
	const lnameValue = lname.value.trim();
	const emailValue = email.value.trim();
	const userValue = user.value.trim();
	const passValue = pass.value.trim();

	if(fnameValue === ''){

		setErrorFor(fname, 'First Name cannot be blank');
	}
	else{
		setSuccessFor(fname);
	}

}
