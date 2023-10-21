var checkSession = "check";
fetch('./php/check-session.php', {
	method: 'POST',
	body: checkSession
})
.then(reponse => reponse.text())
.then(data => {
	console.log(data);
	if (data === "logged") {
		var link = document.querySelectorAll(".linkCourse");
		// for (var i = 0; i < link.length; i++) {
		// 	link[i].href = "./Course-dangnhap.html";
		// }
	}
})
.catch(error => {
	console.error("lỗi:" + error);
})