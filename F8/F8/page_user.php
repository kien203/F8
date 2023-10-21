<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./fontawesome-pro-5.15.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="./css/page_user.css">
	<title></title>
</head>
<body>
	<header>
		<div id="logo">
			<a href="./index.php">
				<img src="./image/logomain.png">
			</a>
			<a href="./index.php">
				<div class="back">
					<i class="fas fa-chevron-left"></i>
					<span>QUAY LẠI</span>
				</div>
			</a>
		</div>
		<div class="user">
			<i class="fas btn-userLogged fa-user"></i>
			<div class="menu-userLogged">
				<ul>
					<li>
						<i class="fas fa-user"></i>
						<span class="user">
							<?php
							include"./php/connect.php";
							session_start();
								$acount = $_SESSION['acount'];
								$pass = $_SESSION['pass'];

								$sql = "SELECT * FROM acount WHERE acount = '$acount' AND password = '$pass' ";
								$result = $conn->query($sql);
								if (mysqli_num_rows($result) == 1) {
									$row = $result->fetch_assoc();
									$username = $row["username"];
									echo $username;
								}
							?>
						</span>
					</li>
					<li>
						<a href="./page_user.php">Trang cá nhân</a>
					</li>
					<hr>
					<li>
						<a href="">Cài đặt tài khoản</a>
					</li>
					<li id="logout">Đăng xuất</li>
				</ul>
			</div>
		</div>
	</header>
	<div>
		<section class="container">
			<div class="profile_banner">
				<div class="profile_user">
					<img src="./image/avatar_page_user.jpg">
					<span>
						<?php
						// include"./php/connect.php";
						// session_start();
						$id = $_SESSION['id'];
						$name_user = "SELECT * FROM acount WHERE ID = $id";
						$con_name_user = $conn->query($name_user);
						if (mysqli_num_rows($con_name_user) == 1) {
							$row = $con_name_user->fetch_assoc();
							$username = $row["username"];
							echo $username;
						}
						?>
					</span>
				</div>
			</div>
			<div class="profile_course">
				<div class="infor_user">
					<h2>Thông tin người dùng</h2>
					<div>
						<h4>Username</h4>
						<div class="infor_username">
							<div class="name">
								<?php echo $username; ?>
							</div>
							<div class="change_username">
								<div class="btn_username">
									Chỉnh sửa
								</div>
							</div>
						</div>
						<div style="display: none;" class="username_new">
							<form action="./php/change_infor_acount.php" method="post">
								Nhập tên mới : <input type="text" name="username_new">
								<input type="submit" name="send">
							</form>
						</div>
					</div>
					<div class="password">
						<h2>Thông tin tài khoản</h2>
						<div class="btn_password">
							Đổi mật khẩu
						</div>
						<div style="display: none;" class="table_change_password">
							<form>
								<div class="password_now">
									<label>Nhập mật khẩu hiện tại: </label>
									<input class="password_now_value" type="text" name="password_now">
								</div>
								<div class="password_new">
									<label>Nhập mật khẩu mới :</label>
									<input class="password_new_value" type="text" name="password_new">
								</div>
								<div class="assets">
									Xác nhận
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="bg_web" style="display: none;"></div>
				<div class="infor_course">
					<h4>Các khóa học đã tham gia</h4>
					<?php
						$course_registed = "SELECT * FROM course_registed WHERE id_user = $id";
						$con_course_regited = $conn->query($course_registed);
						$array_course_regited = array();
						while ($row = $con_course_regited->fetch_assoc()) {
							$name = $row['name_course'];
							array_push($array_course_regited, $name);
						}
						for ($i=0; $i < count($array_course_regited); $i++) {
							$sql = "SELECT * FROM info_course WHERE name = '$array_course_regited[$i]'";
							$result = $conn->query($sql);
							while ($row = $result->fetch_assoc()) {
								$name = $row['name'];
								$title = $row['title'];
								$content = $row['content'];
								$image = $row['img'];

								$link = "./learn/" . $name;
								$link_img = "./image/" . $image;

								echo "	<div class='item_course'>
											<a href=$link>
												<img src=$link_img>
											</a>
											<div class = 'info'>
												<h3>$title</h3>
												<p>$content</p>
											</div>
										</div>";
							}
						}
					?>
				</div>
			</div>
		</section>
	</div>
</body>
</html>
<script type="text/javascript">
	var btn = document.querySelector(".btn-userLogged");
	btn.addEventListener('click', function(){
		var menu = this.parentNode.querySelector(".menu-userLogged");
		if (menu.style.display === "block") {
			menu.style.display = "none";
		} else {
			menu.style.display = "block";
		}
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
</script>
<!-- <script src="./js/change_infor_acount.js"></script> -->
<script type="text/javascript">
var username = document.querySelector(".btn_username");
username.addEventListener('click', function(){
	var table_change = document.querySelector('.username_new');
	table_change.style.display = "block";
})

var password = document.querySelector(".btn_password");
password.addEventListener('click', function(){
	var table_change = this.parentNode.querySelector('.table_change_password');
	table_change.style.display = "block";
})
</script>
<script type="text/javascript">
	var assets = document.querySelector(".assets");
	assets.addEventListener("click", function() {
		var password_now = document.querySelector(".password_now_value").value;
		var password_new = document.querySelector(".password_new_value").value;
		var data = {
			password_now: password_now,
			password_new: password_new
		}
		const jsondata = JSON.stringify(data);
		console.log(jsondata);
		fetch('./php/change_password.php', {
			method: 'POST',
			body: jsondata
		})
		.then(reponse => reponse.text())
		.then(data => {
			console.log(data);
			if (data === "true") {
				alert("Đổi mật khẩu thành công . Yêu cầu đăng nhập lại")
				window.location.href = "./dangnhap.html";
			} else {
				alert("sai mật khẩu");
			}
		})
		.catch(error => {
			console.error('Lỗi', error);
		})
	})
</script>