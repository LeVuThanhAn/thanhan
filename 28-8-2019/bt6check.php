<?php  
	$ht = $_GET["hoten"];
	$msv = $_GET["masv"];
	$gt = $_GET["gt"];
	$dt = $_GET["dt"];
	$email = $_GET["email"];
	$namsinh = $_GET["namsinh"];

	echo "<h1>Thông tin sinh viên</h1>";
	echo "Họ Tên: $ht <br>";
	echo "Mã SV: $msv <br>";
	echo "Giới tính: $gt <br>";
	echo "Điện Thoại: $dt <br>";
	echo "Email: $email <br>";
	echo "Năm sinh: $namsinh <br>";



?>