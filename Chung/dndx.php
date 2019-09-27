<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if (!isset($_SESSION["role"])) {
			echo "<form method='POST'><input type='submit' name='dn' value='Đăng Nhập'></form>";
			if (isset($_POST['dn'])) {
				header("Location: ../4-9-2019/bt9.php");
			}
		} 
		if (isset($_SESSION["role"])) { 
			echo "<form method='POST'><input type='submit' name='dx' value='Đăng xuất'></form>";
			if(isset($_POST['dx'])){
			    session_unset();
			    header("Location: ../4-9-2019/bt9.php");
			}
		} 

	?>

</body>
</html>
