"use script";
// Storing in variables:
const getStarted = document.querySelector(".started");
// Nav-SignIn-SignUp-Buttons
const signInNav = document.querySelector(".in");
const signUpNav = document.querySelector(".up");

//Below-hr-anchor
const openSignIn = document.querySelector(".create-up");

const signInbtn = document.querySelector(".in-button");
const signInModal = document.querySelector(".signIn-modal");
const signUpModal = document.querySelector(".signUp-modal");

const overlay = document.querySelector(".overlay");

const upCross = document.querySelector(".up-close-modal");
const inCross = document.querySelector(".in-close-modal");

const passwordInputField = document.getElementById("cpassword");
const toggleIcon = document.querySelector(".toggle-icon");

// functons:
const InopenModal = () => {
	signInModal.classList.remove("hidden");
	overlay.classList.remove("hidden");
};

const IncloseModal = () => {
	signInModal.classList.add("hidden");
	overlay.classList.add("hidden");
};
const upOpenModal = () => {
	signUpModal.classList.remove("hidden");
	overlay.classList.remove("hidden");
};

const upCloseModal = () => {
	signUpModal.classList.add("hidden");
	overlay.classList.add("hidden");
};

function showPassword() {
	const passwordInput = document.getElementById("password");

	if (passwordInput.type === "password") {
		passwordInput.type = "text";
	} else {
		passwordInput.type = "password";
	}
}

function showInPassword() {
	const inPasswordInput = document.getElementById("inPassword");
	if (inPasswordInput.type === "password") {
		inPasswordInput.type = "text";
	} else {
		inPasswordInput.type = "password";
	}
}

function showConPassword() {
	const cPasswordInput = document.getElementById("cpassword");

	if (cPasswordInput.type === "password") {
		cPasswordInput.type = "text";
	} else {
		cPasswordInput.type = "password";
	}
}

// Events:
signInNav.addEventListener("click", InopenModal);
signUpNav.addEventListener("click", upOpenModal);

overlay.addEventListener("click", IncloseModal);
overlay.addEventListener("click", upCloseModal);
inCross.addEventListener("click", IncloseModal);
upCross.addEventListener("click", upCloseModal);
