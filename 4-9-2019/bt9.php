<?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="display: flex;">
	<div>
		<?php include '../Chung/menuleft.php'; ?>
	</div>
	<div>
		<form method="POST">
			<h1>ĐĂNG NHẬP</h1><br>
			username:<input type="text" name="user"><br>
			password:<input type="password" name="pass"><br>
			<input type="submit" name="dn">
		</form>
		<?php 
			if (isset($_POST['dn'])) {
				$_SESSION["user"] = $_POST["user"];
				$_SESSION["pass"] = $_POST["pass"];
				header('Location: bt9c.php');
			}
		 ?>
	</div>
</body>
</html>