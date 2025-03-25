<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$sql = "INSERT INTO keperluan (deskripsi) VALUES ('Meeting'), ('Magang'), ('Interview')";
$conn->query($sql);


$sql = "INSERT INTO tamu (nama, email, pesan, keperluan_id) 
        VALUES ('Ali', 'ali@example.com', 'Saya ingin bertemu HRD.', 1),
               ('Budi', 'budi@example.com', 'Saya ingin magang.', 2)";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
