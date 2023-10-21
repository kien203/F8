<?php
include 'connect.php';
	$data = json_decode(file_get_contents('php://input'), true);
	$user = $data['user'];
	$acount = $data['acount'];
	$password = $data['pass'];

	$arrayCheck = [];
	$data = "SELECT * FROM acount";
	$result = $conn->query($data);
	if ($result) {
		while ($row = $result->fetch_assoc()) {
			array_push($arrayCheck, $row['acount']);
		}
		for ($i=0; $i < count($arrayCheck); $i++) { 
			if ($arrayCheck[$i] != $acount){
				$check = TRUE;
			} else {
				$check = FALSE;
				break;
			}
		}
		switch ($check) {
			case true:
				$sql = "INSERT INTO `acount` (`username`, `acount`, `password`) VALUES ('$user', '$acount', '$password')";
				if ($conn -> query($sql) === TRUE) {
					$sql1 = "SELECT ID, acount, password FROM acount WHERE acount = '$acount' AND password = '$password' ";
					$result1 = $conn->query($sql1);
					$row = $result1->fetch_assoc();
					$id = $row["ID"];

					// $add_id = "INSERT INTO `list_course_register` (`id_user`) VALUES ('$id')";
					// if ($conn -> query($add_id) === TRUE) {
					// 	$abc = "abc";
					// }

					echo "thành công";
				} else {
					echo "thất bại";
				}
				break;
			case false:
				echo "Tài khoản đã được đăng kí";
				break;
			default:
				echo "Lỗi";
				break;
		}
	}