<?php 
require '../function.php';

if (isset($_POST['submit'])) {
	if (register($_POST) > 0) {
		echo "
			<script>
				alert('Data Berhasil Dibuat');
				document.location.href= 'index.php';
			</script>
		";
	}else{
		mysqli_error($conn);
	}
}
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
	<title>Form Registrasi - Succotash Laundry</title>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css?version=<?php echo filemtime('../css/stylesheet.css') ?>">
</head>
<body>
	<div class="kotak_login">
		<h3>Registrasi</h3>

		<form action="" method="post">
			<ul>
				<li>
					<input type="text" name="nama" class="form_login" placeholder="Nama Lengkap" required>
				</li>
				<li>
					<input type="text" name="alamat" class="form_login" required placeholder="Alamat">
				</li>
				<li>
					<select name="jenis_kelamin" class="form_login">
						<option value="" disabled selected>Jenis Kelamin</option>
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</li>
				<li>
					<input type="text" name="tlp" class="form_login" required placeholder="Nomor Telepon">
				</li>
				<li>
					<button type="submit" name="submit" class="tombol_login">Sign Up</button>
				</li>
		</form>
	</div>
</body>
</html>