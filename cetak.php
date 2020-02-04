 <?php 
// memanggil library FPDF
require('fpdf181/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(50,15,'',0,1);
$pdf->Cell(190,7,'BUKTI PEMINJAMAN PERANGKAT KOMPUTER',0,1,'C');
$pdf->Cell(190,7,'DEPARTEMEN TI PT PUSRI',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(50,12,'',0,1);

include 'function/conn.php';
$tampilkan = mysqli_query($conn, "select *from data_peminjam order by no DESC limit 1");
while ($row = mysqli_fetch_array($tampilkan)){

$pdf->SetFont('Arial','',12);
$pdf->Cell(10,7,'',0,0);
$pdf->Cell(30,7,'Nama',0,0,'L');
$pdf->Cell(5,7,':',0,0);
$pdf->Cell(0,7,$row['nama'],0,1);

$pdf->Cell(10,7,'',0,0);
$pdf->Cell(30,7,'ID',0,0,'L');
$pdf->Cell(5,7,':',0,0);
$pdf->Cell(0,7,$row['id'],0,1);

$pdf->Cell(10,7,'',0,0);
$pdf->Cell(30,7,'No Telpon',0,0,'L');
$pdf->Cell(5,7,':',0,0);
$pdf->Cell(0,7,$row['no_telpon'],0,1);

$pdf->Cell(10,7,'',0,0);
$pdf->Cell(30,7,'Email',0,0,'L');
$pdf->Cell(5,7,':',0,0);
$pdf->Cell(0,7,$row['email'],0,1);

$pdf->Cell(10,16,'',0,0);
$pdf->Cell(30,16,'Saya ingin meminjam Perangkat sebagai berikut :',0,1);
 
$pdf->SetFont('Arial','B',13);

$pdf->Cell(10,14,'',0,0);
$pdf->Cell(10,14,'No',1,0,'C');
$pdf->Cell(48,14,'Nama Perangkat',1,0,'C');
$pdf->Cell(110,14,'Data Perangkat',1,1,'C');

$pdf->SetFont('Arial','',11);

$pdf->Cell(10,12,'',0,0);
$pdf->Cell(10,12,'1',1,0,'C');
$pdf->Cell(48,12,'	Perangkat Printer',1,0);
$pdf->Cell(110,12,'	'.$row['printer'],1,1);

$pdf->Cell(10,12,'',0,0);
$pdf->Cell(10,12,'2',1,0,'C');
$pdf->Cell(48,12,'	Perangkat Scanner',1,0);
$pdf->Cell(110,12,'	'.$row['scanner'],1,1);

$pdf->Cell(10,12,'',0,0);
$pdf->Cell(10,12,'3',1,0,'C');
$pdf->Cell(48,12,'	Perangkat Infocus',1,0);
$pdf->Cell(110,12,'	'.$row['infocus'],1,1);

$pdf->Cell(10,12,'',0,0);
$pdf->Cell(10,12,'4',1,0,'C');
$pdf->Cell(48,12,'	Perangkat Komputer',1,0);
$pdf->Cell(110,12,'	'.$row['komputer'],1,1);

$pdf->Cell(10,12,'',0,0);
$pdf->Cell(10,12,'5',1,0,'C');
$pdf->Cell(48,12,'	Perangkat Laptop',1,0);
$pdf->Cell(110,12,'	'.$row['laptop'],1,1);

$pdf->Cell(10,12,'',0,0);
$pdf->Cell(10,12,'6',1,0,'C');
$pdf->Cell(48,12,'	Lama Meminjam',1,0);
$pdf->Cell(110,12,'	'.$row['lama_pinjam'].' Hari',1,1);

$pdf->Cell(10,12,'',0,0);
$pdf->Cell(10,12,'7',1,0,'C');
$pdf->Cell(48,12,'	Tanggal Pengembalian',1,0);
$pdf->Cell(110,12,'	'.$row['tgl_pengembalian'],1,1);

$pdf->Cell(120,20,'',0,1);

$pdf->Cell(130,10,'',0,0);
$pdf->Cell(30,5,'Palembang, '.$row['tgl_pinjam'],0,1);

$pdf->Cell(10,7,'',0,0);
$pdf->Cell(30,7,'Yang Menyerahkan',0,0,'L');
$pdf->Cell(90,7,'',0,0);
$pdf->Cell(0,7,'Yang Menerima',0,1);

$pdf->Cell(0,20,'',0,1);

$pdf->Cell(10,7,'',0,0);
$pdf->Cell(30,7,'..............................',0,0,'L');
$pdf->Cell(90,7,'',0,0);
$pdf->Cell(0,7,'..............................',0,1);

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(30,5,$row['nama'],0,1);

}

$pdf->SetFont('Arial','',10); 
$pdf->Output("bukti_meminjam.pdf", "D");

?>