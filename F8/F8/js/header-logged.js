var btnLogged = document.querySelector("#btnLogged");
var menuLogged = document.querySelector("#menuLogged");

var bgMenu = document.querySelector("#bg-Menu");

btnLogged.addEventListener("click", function() {
	if (menuLogged.style.display === "none") {
		menuLogged.style.display = "block";
		bgMenu.style.display = "block";
	} else {
		menuLogged.style.display = "none";
	}
})

bgMenu.addEventListener("click", function() {
	if (menuLogged.style.display === "none") {
		menuLogged.style.display = "block";
	} else {
		menuLogged.style.display = "none";
		bgMenu.style.display = "none";
	}
})

var btnUser = document.querySelector(".btn-userLogged");
var menuUser = document.querySelector(".menu-userLogged");
btnUser.addEventListener("click", function(){
	if (menuUser.style.display === "block") {
		menuUser.style.display = "none";
	} else {
		menuUser.style.display = "block";
	}
})

var checkUsername = "check";
var data = new FormData();
data.append("checkUsername", checkUsername);
fetch("./php/checkUsername.php", {
	method:"POST",
	body:data
})
.then(reponse => reponse.text())
.then(data => {
	var user = document.querySelectorAll(".user");
	for (var i = 0; i < user.length; i++) {
		user[i].innerHTML = data;
	}
})
.catch(error => {
	console.error('Lỗi:' + error)
})

var logout = document.querySelector("#logout");
logout.addEventListener("click", function() {
	var checkLogout = "logout";
	var data = new FormData();
	data.append("checkLogout",checkLogout);
	fetch('./php/logout.php', {
		method:'POST',
		body:data
	})
	.then(reponse => reponse.text())
	.then(data => {
		console.log(data);
		if (data === "logout") {
			window.location.href = "index.php";
		}
	})
	.catch(error => {
		console.error("lỗi". error);
	})
})