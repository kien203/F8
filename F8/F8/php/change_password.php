<?php
include'connect.php';
session_start();
$acount = $_SESSION['acount'];
$pass = $_SESSION['pass'];
$data = json_decode(file_get_contents('php://input'), true);
$password_now = $data['password_now'];
$password_new = $data['password_new'];
$check = "SELECT acount, password FROM acount WHERE acount = '$acount' AND password = '$password_now' ";
$result_check = $conn->query($check);
	if (mysqli_num_rows($result_check) == 1) {
		$sql = "UPDATE acount SET password = '$password_new' WHERE acount = '$acount' AND password = '$pass' ";
		$result = $conn->query($sql);
		session_destroy();
		echo "true";
	} else {
		echo "false";
	}

?>