<?php
session_start();
$ids = $_SESSION['id'];
$id = $ids;
echo "$id";
echo "<script>
		var id = $id
		</script>";
$array = array(
	'id' => $id
);
?>

<!-- <script type="text/javascript">
	var data = new FormData();
	data.append("id", id);
	console.log(id);

	fetch('../confrim_thanhtoan.php', {
		method: 'POST',
		headers: {
	        'Content-Type': 'application/json',
	    },
	    body: JSON.stringify(id)
	})
	.then(reponse => reponse.text())
	.then(data => {
		console.log(data);
	})
	.catch(error => {
		console.error('Lỗi', error);
	})
</script> -->

<?php
// print_r($array);
// $ch = curl_init('../confrim_thanhtoan.php');
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $array);

// // Thực hiện HTTP request
// $response = curl_exec($ch);

// // Đóng cURL session
// curl_close($ch);

// // Xử lý dữ liệu trả về từ tập tin PHP đích (nếu có)
// echo $response;
?>