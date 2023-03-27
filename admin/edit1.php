<?php  
	require '../function.php';

	$id = $_GET['id'];

	$outlet = query("SELECT * FROM outlet WHERE id = $id")[0];
	if (isset($_POST['submit'])) {
		if (ubah($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Diubah');
					document.location.href = 'index.php';
				</script
			";
		}else{
			echo "
				<script>
					alert('Data Gagal Diubah');
					document.location.href = 'index.php';
				</script>
			";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Tambah Outlet - Succotash Laundry</title>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css?version=<?php echo filemtime('../css/stylesheet.css') ?>">
</head>
<body>
	<div class="kotak_login">
		<h3>Form Tambah Outlet</h3>

		 	<form action="" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id" value="<?php echo $pinjam["id"]; ?>">
 		<ul>
 			<li>
 				<input type="text" name="nama" id="nama" class = "form_login" required value="<?php echo $pinjam["nama"]; ?>">
 			</li>

 			<li>
 				<input type="date" name="alamat" id="alamat" class="form_login "required value="<?php echo $pinjam["alamat"]; ?>">
 			</li>
 			<li>
 				<label for="tlp">Waktu Peminjaman</label>
 				<input type="text" name="tlp" id="tlp" class="form_login "required value="<?php echo $pinjam["tlp"]; ?>">
 			</li>
 			<li>
 				<button type="submit" name="submit" class="tombol_login">Ubah Data</button>
 			</li>
 		</ul>
 	</form>
	</div>
</body>
</html>