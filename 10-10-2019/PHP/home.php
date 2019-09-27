<!DOCTYPE html>
<html>
<head>
	<title>Danh sách lớp</title>
	<link rel="stylesheet" type="text/css" href="../CSS/sinhvien.css">
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
	<div><?php include '../Chung/banner.php'; ?></div>
	<div class="col-sm-4"><?php include '../Chung/menuleft.php'; ?></div>
	<?php 
		if ($_SESSION['btn'] == 'xtt' || $_SESSION['btn'] =='') { ?>
			<div class='col-sm-8'><?php include '../Chung/hienthithongtin.php'; ?></div>";
			<?php
		}
		if ($_SESSION['btn'] == 'stt') { ?>
			<div class='col-sm-8'><?php include '../Chung/suathongtin.php'; ?></div>
			<?php
		}
	?>
</body>
</html>




<!-- <?php 
		header("Content-type: text/html; charset=utf-8");
		$con = mysqli_connect('localhost','root','','sv');
		mysqli_set_charset($con, 'UTF8');
		
		// $sqlsv = "select * from tblsinhvien where msv=".$_GET['msv'];
		// $kqsv = mysqli_query($con,$sqlsv);

	if ($_SESSION['role']=='gvcn') { 
		$sqlgv = "select * from tbllophoc ";
		$kqgv = mysqli_query($con,$sqlgv);
		?>
		<div class="table-responsive">
		<table border="2" align="center" style=" width: 90%;">
			<thead>
				<tr>
					<th>Tên lớp</th>
					<th>GVCN</th>
					<th>Ngành</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($rowgv = mysqli_fetch_array($kqgv)) {
						echo "<tr>";
						echo "<th><a href='sinhvien.php?idlopsinhhoat=".$rowgv['idlop']."'>".$rowgv["tenlop"]."</a></th>";
						echo "<th>".$rowgv["gvcn"]."</th>";
						echo "<th>".$rowgv["nganh"]."</th>";
					}
				?>
			</tbody>
		</table>
		
	</div>
	<?php } 
	?> -->