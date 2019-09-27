<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/hienthithongtin.css">
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
<body>
	<?php
		header("Content-type: text/html; charset=utf-8");
		$con = mysqli_connect('localhost','root','','sv');
		mysqli_set_charset($con, 'UTF8');
	if ($_SESSION['role']=='gvcn') { 
		$sqlgv = "select * from tblgiaovien where username ='".$_SESSION['username']."'";
		$kqgv = mysqli_query($con,$sqlgv);
	?>
	<div class="row">
		<div class="col-sm-11 httt" align="center">
				<?php
					while ($rowgv = mysqli_fetch_array($kqgv)) {
						echo "<p><b>Tên giáo viên:</b> ".$rowgv['tengv']."</p>";
						echo "<br><p><b>Khoa: </b>".$rowgv['khoa']."</p>";
						echo "<br><p><b>Email: </b>".$rowgv['email']."</p>";
						echo "<br><p><b>Số điện thoại: </b>".$rowgv['sdt']."</p>";
					}
				?>
		</div>
	</div>
<?php } 
	if ($_SESSION['role']=='sv') { 
		$sqlsv = "select * from tblsinhvien where msv ='".$_SESSION['msv']."'";
		$kqsv = mysqli_query($con,$sqlsv);
	?>
	<div class="row">
		<div class="col-sm-11 httt" align="center">
				<?php
					while ($rowsv = mysqli_fetch_array($kqsv)) {
						echo "<p><b>Tên sinh viên:</b> ".$rowsv['hoten']."<b>&nbsp;&nbsp;- &nbsp; Mã SV: </b>".$rowsv['msv']."</p>";
						echo "<p><b>Giới tính: </b>".$rowsv['gioitinh']."<b>&nbsp;&nbsp;- &nbsp;Ngày sinh: </b>".$rowsv['ngaysinh']."</p>";
						echo "<p><b>Số điện thoại: </b>".$rowsv['dt']."</p>";
						echo "<p><b>Email: </b>".$rowsv['email']."</p>";
						echo "<p><b>Địa chỉ: </b>".$rowsv['diachi']."</p>";
						echo "<p><b>Điểm toán: </b>".$rowsv['diemtoan']."<b> - Điểm lý: </b>".$rowsv['diemly']."<b> - Điểm hóa: </b>".$rowsv['diemhoa']."<b> - Điểm trung bình: </b>".$rowsv['diemtb']."</p>";
					}
				?>
		</div>
	</div>
<?php } ?>
</body>
</html>