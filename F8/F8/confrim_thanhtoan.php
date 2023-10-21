<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
body {
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.confrim{
	width: 200px;
	height: 50px;
	background-color: green;
	color: black;
	text-align: center;
	line-height: 50px;
	border-radius: 20px;
}
</style>
<body>
<!-- <div class="confrim">
	Xác nhận thanh toán
</div> -->
<div id="reader" width="600px"></div>
</body>
</html>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<?php
include'./php/connect.php';
session_start();
$id = $_SESSION["id"];
?>
<script type="text/javascript">
function onScanSuccess(decodedText, decodedResult) {
  const config = {
  	qrbox:50,
  }
  <?php
	
	$sqlCheck = "SELECT id_user FROM list_course_pro WHERE id_user = '$id' ";
	$resultCheck = $conn->query($sqlCheck);

	if ($resultCheck === TRUE) {
		$check = TRUE;
	} else {
		$check = FALSE;
	}

	switch ($check) {
		case false:
			$sql = "INSERT INTO list_course_pro (id_user) VALUES ('$id')";
			$result = $conn->query($sql);
			echo "html5QrCode.stop().then((ignore) => {
  					// QR Code scanning is stopped.
					}).catch((err) => {
  					// Stop failed, handle it.
					});";
			break;
		
		default:
			echo "lỗi";
			break;
	}
  ?>
  console.log(`Code matched = ${decodedText}`, decodedResult);
}

function onScanFailure(error) {
  console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 300, height: 300} },
  /* verbose= */ false);

html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>