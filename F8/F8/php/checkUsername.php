<?php
include'connect.php';
session_start();
	$check = $_POST['checkUsername'];
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