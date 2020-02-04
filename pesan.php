<?php  
include 'function/conn.php';

$idPenerima = $_POST['idPenerima'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$query = mysqli_query($conn, "SELECT * FROM data_peminjam WHERE id='$idPenerima'");

if (mysqli_num_rows($query) == 0) {
	include 'daftar_peminjam.php';
		
	echo '<font style="background-color: red; padding: 5px 15px; font-size: 20px; border-radius: 7px; position: fixed; top: 17px; left: 35px; font-family: segoe ui; color: white;">Gagal Terkirim</font>';
} else {

$subjek = $_POST['subjek'];
$isi = $_POST['isi'];

$mail = new PHPMailer(true);                              
	try {
	                                 
	    $mail->isSMTP();                                     
	    $mail->Host = 'smtp.gmail.com'; 
	    $mail->SMTPAuth = true;                            
	    $mail->Username = 'aji19980419@gmail.com';   //email pengirim           
	    $mail->Password = 'aji12345';   //password pengirim                       
	    $mail->SMTPSecure = 'tls';                           
	    $mail->Port = 587;                                  

	while ($row = mysqli_fetch_array($query)){
	    //Recipients
	    $mail->setFrom('19980419@gmail.com', 'Admin'); //email pengirim
	    $mail->addAddress($row['email'], $row['nama']);    
	}
	    //Content
	    $mail->isHTML(true);                               
	    $mail->Subject = $_POST['subjek'];
	    $mail->Body    = $_POST['isi'];

	    // $mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);

	    $mail->send();
	    
	    include 'daftar_peminjam.php';
		
		echo '<font style="background-color: red; padding: 5px 15px; font-size: 20px; border-radius: 7px; position: fixed; top: 17px; left: 35px; font-family: segoe ui; color: white;">Pesan Terkirim</font>';
	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
}

?>