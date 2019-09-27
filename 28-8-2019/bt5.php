<?php session_start(); ?>
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
		<?php 	if (isset($_SESSION["user"])) {
	echo "<h2>xin chào bạn ".$_SESSION["user"]."</h2>";
	include '../Chung/checkrole.php'; echo "|"; 
	include '../Chung/dndx.php';
	}
	if (!isset($_SESSION["user"])) {
		include '../Chung/dndx.php';
	}
	$authors = array(
		array(
			'name' =>'Nguyễn Văn Cường',
			'blog' => 'freetuts.net',
			'position' => 'admin',
		),
		array(
			'name' =>'Trương Phúc Hoài Minh',
			'blog' => 'freetuts.net',
			'position' => 'author',
		),
		array(
			'name' =>'Hoàng Văn Tuyền',
			'blog' => 'freetuts.net',
			'position' => 'author',
		),
		array(
			'name' =>'Nguyễn Tình',
			'blog' => 'freetuts.net',
			'position' => 'author',
		)
	);
	echo "<ul>";
	foreach ($authors as $key => $authors) {
		echo "<li>";
		echo "Name:  ". $authors['name']."<br/>";
		echo "Blog:  ". $authors['blog']."<br/>";
		echo "Position:  ". $authors['position']."<br/>";
		echo "</li>";
	}
	echo "</ul>";
?>
	</div>
</body>
</html>


