var btn = document.querySelector("#submit");
btn.addEventListener('click', function() {
	var userValue = document.querySelector("#username").value;
	var acountValue = document.querySelector("#acount").value;
	var passValue = document.querySelector("#password").value;
	var warningUser = document.querySelector(".warning-name");
	var warningAcount = document.querySelector(".warning-acount");
	var warningPass = document.querySelector(".warning-pass");

	if (userValue === "" || acountValue === "" || passValue === ""){
		if (userValue === "") {
			warningUser.innerHTML = "không được để trống";
		}
		if (acountValue === "") {
			warningAcount.innerHTML = "không được để trống";
		}
		if (passValue === "") {
			warningPass.innerHTML = "không được để trống";
		}
	} else {
		function checkChar(char){
			var checkInput = /^[a-zA-Z0-9]*$/;
			return checkInput.test(char);
		}
		if (!checkChar(userValue)) {
			warningAcount.innerHTML = "không được chứa kí tự đặc biệt";
		} else {
			var data = {
				user: userValue,
				acount: acountValue,
				pass: passValue
			}

			// var user = new FormData();
			// user.append("username", userValue);

			// var acount = new FormData();
			// acount.append("acount", acountValue);

			// var password = new FormData();
			// password.append("password", passValue);

			const jsonData = JSON.stringify(data);
			console.log(jsonData);
			fetch('./php/register.php', {
				method: 'POST',
				body: jsonData
			})
			.then(reponse => reponse.text())
			.then(data => {
				console.log(data);
				if (data === "thành công") {
					alert("đăng kí thành công");
					window.location.href = "dangnhap.html";
				} else {
					alert(data);
				}
			})
			.catch(error => {
				console.error('lỗi', error);
			})
		}
	}
})
