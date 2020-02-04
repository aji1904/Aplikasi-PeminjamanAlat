 <?php
include 'conn.php';

// sql to create table
$sql = "INSERT INTO admin (no,username,password) VALUES ('','admin','admin12345')";

if ($conn->query($sql) === TRUE) {
    echo "Table admin created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 