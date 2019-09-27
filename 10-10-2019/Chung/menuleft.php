<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/menuleft.css">
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
	<div id="mySidenav" class="sidenav">
		<form method="POST">
			<input type="submit" name="xtt" value="Xem thông tin">
			<?php if ($_SESSION['role']=='gvcn') { ?>
			<input type="submit" name="stt" value="Xem lớp">
			<?php } ?>
			<input type="submit" name="stt" value="Sửa thông tin">
			<input type="submit" name="" value="Xem thông tin">
			<input type="submit" name="dx" value="Đăng xuất">
		</form>
	</div>

	<?php 
		if (isset($_POST['dx'])) {
			session_unset();
			header("Location: ../PHP/dangnhap.php");
		}  
		if (isset($_POST['xtt'])) {
			header("Location: ../PHP/home.php");
			$_SESSION['btn'] = 'xtt';
		}
		if (isset($_POST['stt'])) {
			header("Location: ../PHP/home.php");
			$_SESSION['btn'] = 'stt';
		}
	?>

</body>
</html>
