	<?php 
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
	
	?>
<!DOCTYPE html>
<html>
<head>
	<title>BT7</title>
</head>
<body>
		<h1>Máy Tính</h1>
	<br>
	<table>
			<tr>
				<td>Số thứ 1</td>
				<td>Toán tử</td>
				<td>Số thứ 2</td>
				<td></td>
				<td>Kết Quả</td>
			</tr>
			<tr>
				<td><input type=”text” value="<?php echo $n1 ?>"></td>
				<td><input type="text" value="<?php echo($tt) ?> "></td>
				<td><input type="text" value="<?php echo($n2) ?> "></td>
				<td><input type="submit" value="="></td>
				<td><input type="text" value="<?php echo($t) ?> "></td>
			</tr>
		</table>	
</body>
</html>