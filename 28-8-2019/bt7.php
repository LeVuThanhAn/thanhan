<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>BT7</title>
</head>
<body style="display: flex;">
	<div>
		<?php include '../Chung/menuleft.php'; ?>
	</div>
	<div>
		<?php 	if (isset($_SESSION["user"])) {
	echo "<h2>xin chào bạn ".$_SESSION["user"]."</h2>";
	include '../Chung/checkrole.php'; echo "|"; 
	include '../Chung/dndx.php';
	}
	if (!isset($_SESSION["user"])) {
		include '../Chung/dndx.php';
	} ?>
	<h1>Máy Tính</h1>
	<br>
	<form method="GET" onclick="false;">
		<table>
			<tr>
				<td>Số thứ 1</td>
				<td>Toán tử</td>
				<td>Số thứ 2</td>
				<td></td>
			</tr>
			<tr>
				<td><input type="text" name="n1"></td>
				<td><input type="text" name="tt"></td>
				<td><input type="text" name="n2"></td>
				<td><input type="submit" name="=" value="="></td>

			</tr>
		</table>		
	</form>
	<?php
	if (isset($_GET["="])) {
		
		$n1 = $_GET['n1'];
		$tt = $_GET['tt'];
		$n2 = $_GET['n2'];
		$t = 0;
		if(empty($n1) || empty($tt) ||empty($n2)){
			echo "Nhập thiếu dữ liệu!";
			exit();
		}
		if(!is_numeric($n1) || !is_numeric($n2)){
			echo "Vui lòng nhập số!!!";
			exit();
		}
		elseif ($tt == '+') {
			$t = $n1 + $n2;
		}
		elseif ($tt == '-') {
			$t = $n1 - $n2;
		}
		elseif ($tt == '*') {
			$t = $n1 * $n2;
		}
		elseif ($tt == '/') {
			$t = $n1 / $n2;
		}
		echo "Kết quả là: ".$t ;
	}
	?>
	</div>

</body>
</html>