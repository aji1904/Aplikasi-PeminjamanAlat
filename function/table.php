 <?php
include 'conn.php';

// sql to create table
$sql = "CREATE TABLE data_peminjam (
no INT(5) AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(50),
id VARCHAR(15),
no_telpon VARCHAR(15),
email VARCHAR(40),
nama_alat VARCHAR(70),
printer VARCHAR(30),
scanner VARCHAR(30),
infocus VARCHAR(30),
komputer VARCHAR(30),
laptop VARCHAR(30),
lama_pinjam INT(5),
tgl_pinjam DATE,
tgl_pengembalian DATE,
status VARCHAR(20)
)";

$sqladmin = "CREATE TABLE admin (
no INT(11) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table data_peminjam created successfully<br><br>";
} else {
    echo "Error creating table: " . $conn->error;
}


if (mysqli_query($conn, $sqladmin)) {
    echo "Table admin created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 