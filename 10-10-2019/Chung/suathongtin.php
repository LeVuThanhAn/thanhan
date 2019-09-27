<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<link rel="stylesheet" type="text/css" href="../CSS/suathongtin.css">
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
	<div class="col-sm-11">
	<?php
		header("Content-type: text/html; charset=utf-8");
		$con = mysqli_connect('localhost','root','','sv');
		mysqli_set_charset($con, 'UTF8');
	if ($_SESSION['role'] == 'sv') {
		$sqlsv = "select * from tblsinhvien where msv ='".$_SESSION['msv']."'";
		$kqsv = mysqli_query($con,$sqlsv);
		$rowsv = mysqli_fetch_array($kqsv);
		echo "<form method='POST' align = 'center' style='margin-top:15px;'>
			<table>
				<tr>
					<th><span>Ngày sinh :</span></th>
					<th><input type='text' class='ip' name='ngaysinh' placeholder=' YYYY-MM-DD' value='".$rowsv['ngaysinh']."'></th>
				</tr>
				<tr>
					<th><span>Giới tính :</span></th>
					<th><input type='text' class='ip' name='gioitinh' placeholder='Nam/Nữ' value='".$rowsv['gioitinh']."'></th>
				</tr>
				<tr>
					<th><span>Số điện thoại :</span></th>
					<th><input type='text' class='ip' name='dt' placeholder='Số điện thoại' value='".$rowsv['dt']."'></th>
				</tr>
				<tr>
					<th><span>Địa chỉ :</span></th>
					<th><input type='text' class='ip' name='diachi' placeholder='Địa chỉ' value='".$rowsv['diachi']."'></th>
				</tr>

			</table>
				<br>
				<input type='submit' name='sua' value='Sửa thông tin' class='btn btn-success' style='font-family: Oswald; margin-top: 5px; font-size: 25px;'>
			</form>";
			
			 }	?>
		</div>
		<?php 
		if (isset($_POST['sua'])) {
			$sqlsv2 = " update tblsinhvien set ngaysinh = '".$_POST['ngaysinh']."', gioitinh ='".$_POST['gioitinh']."', dt = '".$_POST['dt']."', diachi = '".$_POST['diachi']."' WHERE msv='".$_SESSION['msv']."'";
			if (mysqli_query($con,$sqlsv2)) {
				echo "
					<script>
						alert ('Sửa thành công');
					</script>
					";
			}
			else{
				echo "
					<script>
						alert ('Sửa thất bại');
					</script>
					";
			}
		} 
		 ?>
</body>		
</html>

<!-- <?php 
			header("Content-type: text/html; charset=utf-8");
			$con = mysqli_connect('localhost','root','','sv');
			mysqli_set_charset($con, 'UTF8');
			if ($_SESSION['role']=='sv') { ?>
				<form method="POST">
				<input type="text" class="form-control" name="ngaysinh" placeholder="Ngày sinh YYYY-MM-DD">
				<input type="text" class="form-control" name="gioitinh" placeholder="Giới tính">
				<input type="text" class="form-control" name="dt" placeholder="Điện thoại">
				<input type="text" class="form-control" name="diachi" placeholder="Địa chỉ"><br>
				<input type="submit" name="sua" value="Sửa thông tin" class="btn btn-success" style="font-family: Oswald; margin-left: 5em; font-size: 25px;">
			</form>
			<?php
			
		}
		if ($_SESSION['role']=='gvcn') { 
			$sqlgv = "select idlop from tbllophoc where username = '".$_POST['username']."'";
			$kqgv = mysqli_query($con,$sqlgv);
			while ($rowgv = mysqli_fetch_array($kqgv) ) {
				header("Location: dslop.php?idlop=".$rowgv['idlop'] );
			}
			} 
	?> -->