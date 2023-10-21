<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./fontawesome-pro-5.15.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<link rel="stylesheet" href="./css/LoTrinh.css">
	<link rel="stylesheet" type="text/css" href="./css/mainblog.css">
	<link rel="stylesheet" type="text/css" href="./css/khoahoc.css">
	<link rel="stylesheet" type="text/css" href="./css/Course-Infor.css">
	<link rel="stylesheet" type="text/css" href="./css/Status1.css">
	<link rel="stylesheet" type="text/css" href="./reponsive/header-reponsive.css">
	<title>
		F8-Học Lập Trình Để Đi Làm
	</title>
	
</head>
<body>
	<div>
	<?php
	session_start();
		if (isset($_SESSION['acount'])) {
			include 'header-logged.html';
			include 'sidebar.html';
			$page = isset($_GET['page_layout']) ? $_GET['page_layout'] : 'trangchu.html';
			if ($page) {
				$savePage = $page;
			    include($savePage);
			}
		} else {
			include 'header.html';
			include 'sidebar.html';
			$page = isset($_GET['page_layout']) ? $_GET['page_layout'] : 'trangchu.html';
			if ($page) {
				$savePage = $page;
			    include($savePage);
			}
		}
	?>
	</div>
	<?php 
	include 'footer.html';
	?>
</body>
</html>