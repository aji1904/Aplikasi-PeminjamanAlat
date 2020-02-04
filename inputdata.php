<?php 

include 'function/conn.php';


$nama=$_POST['nama'];
$id=$_POST['id'];
$no_telpon=$_POST['no_telpon'];
$email=$_POST['email'];

$nama_alat=$_POST['nama_alat'];

$merek_ptr = $_POST['merek_ptr'];
$merek_scr = $_POST['merek_scr'];
$merek_ifs = $_POST['merek_ifs'];
$merek_kpr = $_POST['merek_kpr'];
$merek_ltp = $_POST['merek_ltp'];


$ptr = $_POST['ptr'];
$scr = $_POST['scr'];
$ifs = $_POST['ifs'];
$kpr = $_POST['kpr'];
$ltp = $_POST['ltp'];

$lama_pinjam = $_POST['lama_pinjam'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];

if (isset($_POST['masuk'])) {
	$nama_alat = implode(', ', $_POST['nama_alat']);

	if (!empty(trim($nama)) && !empty(trim($id)) && !empty(trim($no_telpon)) && !empty(trim($email))) {

		$sql = "INSERT INTO data_peminjam (no, nama, id, no_telpon, email, nama_alat, printer, scanner, infocus, komputer, laptop, lama_pinjam, tgl_pinjam, tgl_pengembalian,status ) VALUES ('', '$nama', '$id', '$no_telpon', '$email', '$nama_alat','$ptr $merek_ptr','$scr $merek_scr', '$ifs $merek_ifs', '$kpr $merek_kpr', '$ltp $merek_ltp', '$lama_pinjam', '$tgl_pinjam','$tgl_pengembalian','belum')";
		if (mysqli_query($conn, $sql)) {
			include 'terimakasih.php';
		}
		}else{
			echo "<center>Gagal</center>";
    		include 'peminjam.php';
		}
}else{
	header("location: peminjam.php");
}

mysqli_close($conn);
?>
