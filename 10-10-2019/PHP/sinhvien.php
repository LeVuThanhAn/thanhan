<!DOCTYPE html>
<html>
<head>
	<title>Danh sách lớp</title>
	<link rel="stylesheet" type="text/css" href="../CSS/sinhvien.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">
</head>
<body class="body">
	<div style="width: 100%;"><?php include '../Chung/banner.php'; ?></div>
	<div><?php include '../Chung/menuleft.php'; ?></div><br><br><br><br>
	<?php
		header("Content-type: text/html; charset=utf-8");
		$con = mysqli_connect('localhost','root','','sv');
		mysqli_set_charset($con, 'UTF8');
	if ($_SESSION['role']=='gvcn') { 
		$sqlgv = "select * from tblsinhvien where idlop = ".$_GET['idlopsinhhoat'];
		$kqgv = mysqli_query($con,$sqlgv);
	?>
	<table border="2" align="center" style=" width: 90%;">
			<thead>
				<tr>
					<th>ID</th>
					<th>Họ tên</th>
					<th>Mã SV</th>
					<th>Ngày sinh</th>
					<th>Giới tính</th>
					<th>Điện thoại</th>
					<th>Email</th>
					<th>Địa chỉ</th>
					<th>Điểm toán</th>
					<th>Điểm Lý</th>
					<th>Điểm hóa</th>
					<th>Điểm trung bình</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($rowgv = mysqli_fetch_array($kqgv)) {
						echo "<tr>";
						echo "<th>".$rowgv["id"]."</th>";
						echo "<th>".$rowgv["hoten"]."</th>";
						echo "<th>".$rowgv["msv"]."</th>";
						echo "<th>".$rowgv["ngaysinh"]."</th>";
						echo "<th>".$rowgv["gioitinh"]."</th>";
						echo "<th>".$rowgv["dt"]."</th>";
						echo "<th>".$rowgv["email"]."</th>";
						echo "<th>".$rowgv["diachi"]."</th>";
						echo "<th>".$rowgv["diemtoan"]."</th>";
						echo "<th>".$rowgv["diemly"]."</th>";
						echo "<th>".$rowgv["diemhoa"]."</th>";
						echo "<th>".$rowgv["diemtb"]."</th>";
						echo "<th><a href='suattsv.php?msv=".$rowgv["msv"]."' >Sửa</a>";
					}
				?>
			</tbody>
		</table>
	<?php } 
	if ($_SESSION['role']=='sv') {
		$sqlsv = "select * from tblsinhvien where msv = '".$_GET['msv']."'";
		$kqsv = mysqli_query($con,$sqlsv); ?>
		<table border="2" align="center" style=" width: 90%;">
			<thead>
				<tr>
					<th>ID</th>
					<th>Họ tên</th>
					<th>Mã SV</th>
					<th>Ngày sinh</th>
					<th>Giới tính</th>
					<th>Điện thoại</th>
					<th>Email</th>
					<th>Địa chỉ</th>
					<th>Điểm toán</th>
					<th>Điểm Lý</th>
					<th>Điểm hóa</th>
					<th>Điểm trung bình</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($rowsv = mysqli_fetch_array($kqsv)) {
						echo "<tr>";
						echo "<th>".$rowsv["id"]."</th>";
						echo "<th>".$rowsv["hoten"]."</th>";
						echo "<th>".$rowsv["msv"]."</th>";
						echo "<th>".$rowsv["ngaysinh"]."</th>";
						echo "<th>".$rowsv["gioitinh"]."</th>";
						echo "<th>".$rowsv["dt"]."</th>";
						echo "<th>".$rowsv["email"]."</th>";
						echo "<th>".$rowsv["diachi"]."</th>";
						echo "<th>".$rowsv["diemtoan"]."</th>";
						echo "<th>".$rowsv["diemly"]."</th>";
						echo "<th>".$rowsv["diemhoa"]."</th>";
						echo "<th>".$rowsv["diemtb"]."</th>";
						$_SESSION['msv'] = $rowsv["msv"];
					}
				?>
			</tbody>
		</table>
	<?php } ?>
</body>
</html>