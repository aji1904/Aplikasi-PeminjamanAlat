<?php
	include 'function/conn.php';

	$id=$_POST['id'];	
	$status=$_POST['status'];

	$query = mysqli_query($conn, "SELECT * FROM data_peminjam WHERE id='$id'");

	if (mysqli_num_rows($query) == 0) {
		include 'daftar_peminjam.php';
		
		echo '<font style="background-color: red; padding: 5px 15px; font-size: 20px; border-radius: 7px; position: fixed; top: 17px; left: 35px; font-family: segoe ui; color: white;">Gagal</font>';
	} else {
		$sql = ("UPDATE data_peminjam SET status = '$status' WHERE id = '$id' ");

		if (mysqli_query($conn, $sql)) {
			include 'daftar_peminjam.php';

			echo '<font style="background-color: red; padding: 5px 15px; font-size: 20px; border-radius: 7px; position: fixed; top: 17px; left: 35px; font-family: segoe ui; color: white;">Sukses</font>';
		}else{
			echo "gagal";
		}
	}
	

?>