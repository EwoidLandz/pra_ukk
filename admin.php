<?php 
// session_start();
	
// 	 if($_SESSION['role']==""){
//         header("location:login.php?pesan=gagal");
    // }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Succotash Laundry</title>
	<link rel="stylesheet" type="text/css" href="style.css?version=<?php echo filemtime('style.css'); ?>">
</head>
<body>
	<div class="header">
		<div class="header-logo"><img src="img/laundry.png" width="120px" height="120px"></div>
		<div class="header-list">
			<ul>
				<li>
					<a href="registrasi.php">REGISTRASI</a> |
					<a href="outlet.php">OUTLET</a> |
					<a href="produk.php">PRODUK</a> |
					<a href="pengguna.php">PENGGUNA</a> |
					<a href="transaksi.php">TRANSAKSI</a> |
					<a href="generate.php">GENERATE</a> |
					<a href="logout.php">LOGOUT</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="main">
		<img src="img/laundry1.jpg" width="100%" height="500px">
	</div>
	<div class="footer">
		<h2>Succotash Laundry</h2>
		<p class="p">Alamat:</p>
		<p></p>
		<p class="p">Customer Care:</p>
		<p></p>
		<p></p>
		<p class="p">Email:</p>
		<p></p>
	</div>
</body>
</html>