<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$sql = "CREATE TABLE keperluan (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    deskripsi VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel keperluan berhasil dibuat!";
} else {
    echo "Error: " . $conn->error;
}


$sql = "CREATE TABLE tamu (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pesan TEXT NOT NULL,
    keperluan_id INT(6) UNSIGNED,
    FOREIGN KEY (keperluan_id) REFERENCES keperluan(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel tamu berhasil dibuat!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
