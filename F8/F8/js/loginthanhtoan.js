var btn = document.querySelector("#submit");
btn.addEventListener("click", function(){
	var acountValue = document.querySelector("#acount").value;
	var passValue = document.querySelector("#password").value;
	var warningAcount = document.querySelector(".warning-acount");
	var warningPass = document.querySelector(".warning-pass");
	var regex = /^[a-zA-Z0-9]+$/;
	if (acountValue === "" || passValue === "") {
		if (acountValue === "") {
			warningAcount.innerHTML = "bạn chưa nhập tài khoản";
		} else if (passValue === "") {
			warningPass.innerHTML = "bạn chưa nhập mật khẩu";
		}
	} else {
		var checkInput = /^[a-zA-Z0-9]*$/;
		if (!checkInput.test(acountValue)) {
			warningAcount.innerHTML = "không được chứa kí tự đặc biệt";
		} else {
			var data = {
			acount : acountValue,
			pass : passValue
			}
			const jsondata = JSON.stringify(data);
			console.log(jsondata);
			fetch('./php/login.php', {
				method: 'POST',
				body: jsondata
			})
			.then(reponse => reponse.text())
			.then(data => {
				console.log(data);
				if (data === "true") {
					window.location.href = "confrim_thanhtoan.php";
				} else {
					alert("Sai tài khoản hoặc mật khẩu");
				}
			})
			.catch(error => {
				console.error('Lỗi', error);
			})
		}
	}
})