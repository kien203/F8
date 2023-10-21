var array_link = document.querySelectorAll(".linkCourse");

var send = "send";
fetch("./php/change-link.php", {
	method: 'POST',
	body: send
})
.then(reponse=>reponse.text())
.then(data=> {
	var sql = data.split('<br>');
	for (var i = 0; i < array_link.length; i++) {
		for (var j = 0; j < sql.length; j++) {
			if (array_link[i].getAttribute('title') === sql[j]) {
				array_link[i].href = "./learn/" + sql[j] + ".html";
				var content = array_link[i].querySelector("p");
				content.innerHTML = "Tiếp tục học";
			}
		}
	}
})
.catch(error=> {
	console.error("lỗi:" + error);
})