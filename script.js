function moveup() {
    document.getElementById("main").style.height = "400px";
    document.getElementById("header").style.opacity = "0";
    document.getElementById("id-buttons").style.opacity = "0";
    document.getElementById("signup-btn").disabled = true;
    document.getElementById("login-btn").disabled = true;
}

function signup() {
    moveup();
    document.getElementById("signup").style.display = "block";
}

function login() {
    moveup();
    document.getElementById("login").style.display = "block";
}


function continueSignup() {
    if(document.getElementById("password").value != document.getElementById("repeat-password").value) {
        alert("Passwords don't match!");
	}
}