<!DOCTYPE html>
<html>
<head>
	<title>Sửa thông tin</title>
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
	<div class="row">
		<div class="col-sm-12">
			<div style="width: 100%;"><?php include '../Chung/banner.php'; ?></div>
			<div class="row">
				<div class="col-sm-6">
					<a href="dslop.php" style="padding-top: 2em;"> &nbsp;&nbsp;&nbsp;&nbsp; <<< Back</a>
				</div>
				<div class="col-sm-6">
					<?php include '../Chung/menuleft.php'; ?>
				</div>
			</div><br><br><br><br>
		</div>
		<div class="col-sm-4 col-sm-offset-4">
			<h3 align="center" style="font-family: Oswald">Sửa thông tin</h3>
			<?php 
				header("Content-type: text/html; charset=utf-8");
				$con = mysqli_connect('localhost','root','','sv');
				mysqli_set_charset($con, 'UTF8');
			?>
			<form method="POST">

				<input type="text" class="form-control" name="diemtoan" placeholder="Điểm toán">
				<input type="text" class="form-control" name="diemly" placeholder="Điểm lý">
				<input type="text" class="form-control" name="diemhoa" placeholder="Điểm hóa">
				<input type="text" class="form-control" name="diemtb" placeholder="Điểm trung bình"><br>
				<input type="submit" name="sua" value="Sửa thông tin" class="btn btn-success" style="font-family: Oswald; margin-left: 5em; font-size: 25px;">

			</form>
			<?php
			if (isset($_POST['sua'])) {
				 $sql= "update tblsinhvien SET diemtoan=".$_POST['diemtoan'].", diemly =".$_POST['diemly'].", diemhoa =".$_POST['diemhoa'].",diemtb = ".$_POST['diemtb']." where msv ='".$_GET['msv']."'";
				if(mysqli_query($con,$sql)){
					echo "<p>Sửa thành công</p>";
				}
			}

			?>
		</div>	
	</div>


</body>		
</html>