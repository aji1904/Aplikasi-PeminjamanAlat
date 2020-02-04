 <?php
	include 'function/conn.php';

	if (isset($_POST['login'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$cek = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password='$password'");
	if (mysqli_num_rows($cek) == 1) {
		session_start();
		include 'daftar_peminjam.php';
	}else{
		echo "<center>User dan Password Salah !!!</center>";
		include 'admin.php';
		}
	}else{
		header("location: admin.php");
	}
 	

?>
 