<?php
session_start();
include'connect.php';
	$data = json_decode(file_get_contents('php://input'), true);
	$acount = $data['acount'];
	$pass  = $data['pass'];
	$id = "";
	$sql = "SELECT ID, acount, password FROM acount WHERE acount = '$acount' AND password = '$pass' ";
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) == 1) {
		$_SESSION['acount'] = $acount;
		$_SESSION['pass'] = $pass;
		$row = $result->fetch_assoc();
		$_SESSION['id'] = $row["ID"];
		echo "true";
	} else {
		echo "false";
	}
?>