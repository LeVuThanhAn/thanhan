<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>BT6</title>
</head>
<body style="display: flex;">
	<div>
		<?php include '../Chung/menuleft.php'; ?>
	</div>
	  <div>
		<?php 	
		if (isset($_SESSION["user"])) {
		echo "<h2>xin chào bạn ".$_SESSION["user"]."</h2>";
		include '../Chung/checkrole.php'; echo "|"; 
		include '../Chung/dndx.php';
		}
		if (!isset($_SESSION["user"])) {
			include '../Chung/dndx.php';
		} ?>
	</div>
	<div>  
	<form method="GET" action="bt6check.php">
		
		<h1>Thông Tin Sinh Viên</h1>
		Họ Tên <input type="text" name="hoten"><br><br>
		Mã SV <input type="text" name="masv"><br><br>
		Giới tính <input type="radio" name="gt" value="Nam">Nam <input type="radio" name="gt" value="Nữ">Nữ<br>
		ĐT <input type="text" name="dt"><br><br>
		Email <input type="text" name="email"><br><br>
		Năm sinh <select name="namsinh">
					<?php
						for ($i=1920; $i <=2019 ; $i++) { 
							echo "<option> $i </option>";
						}
					?>
				</select><br>
		<input type="submit" name="send" value="Gửi">
	</form>
	</div>
</body>
</html>
