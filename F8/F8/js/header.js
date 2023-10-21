var btnLogin = document.querySelector("#btnNotlogin")
var menuLogin = document.querySelector("#menuNotlogin");

var bgMenu = document.querySelector("#bg-Menu");

btnLogin.addEventListener("click", function() {
	if (menuLogin.style.display === "none") {
		menuLogin.style.display = "block";
		bgMenu.style.display = "block";
	} else {
		menuLogin.style.display = "none";
	}
})

bgMenu.addEventListener("click", function() {
	if (menuLogin.style.display === "none") {
		menuLogin.style.display = "block";
	} else {
		menuLogin.style.display = "none";
		bgMenu.style.display = "none";
	}
})