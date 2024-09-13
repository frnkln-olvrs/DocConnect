const signUpButton = document.getElementById('signUp');
const signUpButtonOverlay = document.getElementById('signUp-overlay');
const signInButton = document.getElementById('signIn');
const signInButtonOverlay = document.getElementById('signIn-overlay');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});
signUpButtonOverlay.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
signInButtonOverlay.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});