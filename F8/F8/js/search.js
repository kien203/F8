var btnSearch = document.querySelector("#search");
btnSearch.addEventListener("keyup", function(event){
		var searchValue = document.querySelector("#search").value;

		var tableSearch = document.querySelector(".infor-search");

		var div = document.createElement("div");
		div.classList.add("checkdiv");

		var checkdiv = tableSearch.querySelector(".checkdiv");

		tableSearch.appendChild(div);

		if (checkdiv || searchValue === "") {
			checkdiv.remove();
		}

		var data = new FormData();
		if (searchValue === "" || searchValue === " ") {
			var abc = "ádjhalskjda";
			data.append("searchValue", abc);
		} else {
			data.append("searchValue", searchValue);
		}
		
		fetch("./php/search.php", {
			method:"POST",
			body:data
		})
		.then(response => response.text())
		.then(data => {
			var dataArray = data.split('|a');

	        for (var i = 0; i < dataArray.length - 1; i++) {
	        	var dataArrayChild = dataArray[i].split('|n');

	        	for (var j = 0; j < dataArrayChild.length; j++) {

	        		var linka = document.createElement("a");
	        		div.appendChild(linka);

	        		var img = document.createElement("img");
	        		img.src = "./image/" + dataArrayChild[0];
	        		linka.appendChild(img);

	        		var content = document.createElement("span");
	        		content.innerHTML = dataArrayChild[1];
	        		linka.appendChild(content);

	        		linka.href = dataArrayChild[2];

	        		break;
	        	}
	        }
	    })
	    .catch(error => {
	        console.error("Lỗi: " + error);
	    });
})