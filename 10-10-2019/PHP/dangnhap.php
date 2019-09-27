<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<link rel="stylesheet" type="text/css" href="../CSS/dangnhap.css">
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
	<div>
	<div>
		<?php include '../Chung/banner.php'; ?>
	</div>

	<?php if (isset($_SESSION['role'])) { ?>
	<div>
		<h1 style="font-family: Oswald;text-align: center;">Bạn đã đăng nhập</h1>
		<h3 align="center"><a href="home.php" style="font-family: Oswald;">Nhấp vào đây để vào trang thông tin</a>
	</div></h3>
	<?php }
		if (!isset($_SESSION['role'])) { ?>

	<div class="form" align="center" style="display: block;">
		<form method="POST" class="form-dn">
			<h2 align="center" style="padding-top: 1em; font-family: Oswald;">ĐĂNG NHẬP</h2>
			<input type="text" name="username" class="uspa" placeholder="Tên đăng nhập" >
			<input type="password" name="password" class="uspa" placeholder="Mật khẩu">
			<div>
			<select name="rol" style="border-radius: 30px 30px 30px 30px;outline: none; margin-top: 10px;">
				<option>GVCN</option>
				<option>SV</option>
			</select>
			</div>
			<input type="submit" name='dn' style="border-radius: 30px 30px 30px 30px; background-color: #fed014;font-family: Fira Sans Condensed;font-size: 20px; margin-top: 0.5em; margin-bottom: 0.5em;outline: none;" value="ĐĂNG NHẬP">
		</form>
	</div>
	</div>
	<?php 
		$con = mysqli_connect('localhost','root','','sv');
		$sqlgv = "select idlop, username, matkhau from tbllophoc";
		$sqlsv = "select msv, matkhau from tblsinhvien";
		$kqgv = mysqli_query($con,$sqlgv);
		$kqsv = mysqli_query($con,$sqlsv);
		if (isset($_POST['dn'])) {
			if ($_POST['username'] == '' || $_POST['password'] == '') {
			echo "<script>
			alert('Vui lòng nhập đầy đủ thông tin!');
			</script>";
			exit();
		}
			while ($rowgv = mysqli_fetch_array($kqgv)) {
			if ($_POST['username'] == $rowgv['username']&& $_POST['password'] == $rowgv['matkhau'] && $_POST['rol']=='GVCN' ) {

				$_SESSION['role'] = 'gvcn';
				$_SESSION['username'] = $rowgv['username'];
				$_SESSION['btn'] = '';
				header("Location: home.php");
			}
			}

			while ($rowsv = mysqli_fetch_array($kqsv)) {
			if ($_POST['username'] == $rowsv['msv']&& $_POST['password'] == $rowsv['matkhau'] && $_POST['rol']=='SV' ) {
				$_SESSION['role'] = 'sv';
				$_SESSION['msv'] = $rowsv['msv'];
				$_SESSION['btn'] = '';
				header("Location: home.php");
			}
		}

		if($_POST['username'] == 'admin' && $_POST['password'] == '123'){
			$_SESSION['role'] = 'admin'; 
				header("Location: dslop.php");
		}
		
	}
	}
	?>
</body>
</html>