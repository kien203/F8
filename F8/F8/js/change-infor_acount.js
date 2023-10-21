var username = document.querySelector(".btn_username");
username.addEventListerner('click', function(){
	var table_change = this.parent('.table_change_username');
	table_change.style.display = "block";
})