var link = document.querySelector(".linkCoursePro");
var btn = link.querySelector(".button-course");
var send = "send";
fetch("./php/change-link-course-pro.php", {
	method: 'POST',
	body: send
})
.then(reponse=>reponse.text())
.then(data=> {
	console.log(data);
	if (data === "true") {
		link.href = "./course_pro/html_css_pro.html";
		btn.innerHTML = "Tiếp tục học";
	}
})
.catch(error=> {
	console.error("lỗi:" + error);
})