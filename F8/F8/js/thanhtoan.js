const qrCodeData = "https://394f-2405-4802-1ca9-2a10-3534-51e-3fc1-c4ab.ngrok-free.app/F8-2/loginthanhtoan.html";
const qrcode = new QRCode(document.querySelector(".qrcode"), qrCodeData);


// Thêm sự kiện click cho phần tử <a>
qrButton.addEventListener('click', function() {
  // Kiểm tra trạng thái hiển thị của bảng
  const display = qrTable.style.display;
  if (display === 'none') {
    // Nếu bảng đang ẩn, hiển thị bảng
    qrTable.style.display = 'block';
  } else {
    // Nếu bảng đang hiển thị, ẩn bảng
    qrTable.style.display = 'none';
  }
});
function sendApi(){
	var send = "send";
	fetch("./php/change-link-course-pro.php", {
		method: 'POST',
		body: send
	})
	.then(reponse=>reponse.text())
	.then(data=> {
		console.log(data);
		if (data === "true") {
			alert("Thanh toán thành công");
			window.location.href = "./course_pro/html_css_pro.html";
		}
	})
	.catch(error=> {
		console.error("lỗi:" + error);
	})
}
setInterval(sendApi, 3000);