<?php
	session_start();
	if ($_SESSION["user"]=="admin" && $_SESSION["pass"]=="333") {
		$_SESSION["role"] = "admin";
		echo "Bạn đã đăng nhập với role admin!!!";
	}
	elseif ($_SESSION["user"]=="abc" && $_SESSION["pass"]=="123") {
		$_SESSION["role"] = "user";
		echo "Bạn đã đăng nhập với role user!!!";
	}
	else{
		header('Location: bt9.php');
	}
	include '../Chung/menuleft.php';

?>