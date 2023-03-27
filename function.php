<?php 
	$conn = mysqli_connect("localhost","root","","pra_ukk");

	function query($query){
		global $conn;
		$result = mysqli_query($conn,$query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		};
		return $rows;
	}

	function register($post){
		global $conn;

		$nama = htmlspecialchars($post['nama']);
		$alamat = htmlspecialchars($post['alamat']);
		$jenis_kelamin = htmlspecialchars($post['jenis_kelamin']);
		$tlp = htmlspecialchars($post['tlp']);

		$query = "INSERT INTO member VALUES('','$nama','$alamat','$jenis_kelamin','$tlp')";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}
?>