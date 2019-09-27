<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>BT4</title>
</head>
<body style="display: flex;">
	<?php
		$tensv = array("Ronaldinho","Young","DeGea","Neuer","Pirlo","Dembele", "Coutinho","Neymar","Messi", "Rolnado");
		sort($tensv);
	?>
	<div>
	<?php
	include '../Chung/menuleft.php';
	?>
	</div> 
	<?php 	if (isset($_SESSION["user"])) {
	echo "<h2>xin chào bạn ".$_SESSION["user"]."</h2>";
	include '../Chung/checkrole.php'; echo "|"; 
	include '../Chung/dndx.php';
	}
	if (!isset($_SESSION["user"])) {
		include '../Chung/dndx.php';
	}?>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th>STT</th>
			<th>Tên sinh viên</th>
		</tr>
		<?php
			for ($i=1; $i <=10 ; $i++) { 
				echo "<tr>
				<th>$i</th>
			<th>".$tensv[$i -1]."</th></tr>";
			}
		?>	
	</table>
</body>
</html>