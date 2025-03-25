<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$sql = "CREATE DATABASE buku_tamu";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat!";
} else {
    echo "Error membuat database: " . $conn->error;
}

$conn->close();
?>
=======
<?php
$servername = "localhost"; // Server database (biasanya localhost)
$username = "root"; // Username MySQL
$password = ""; // Password MySQL (kosong kalau default di XAMPP)
$dbname = "buku_tamu"; // Nama database

// Koneksi ke MySQL
$conn = new mysqli($servername, $username, $password);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Buat database kalau belum ada
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error membuat database: " . $conn->error;
}

// Gunakan database
$conn->select_db($dbname);

// Buat tabel keperluan
$sql = "CREATE TABLE IF NOT EXISTS keperluan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    deskripsi VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabel keperluan berhasil dibuat.<br>";
} else {
    echo "Error membuat tabel keperluan: " . $conn->error;
}

// Buat tabel tamu
$sql = "CREATE TABLE IF NOT EXISTS tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    keperluan_id INT NOT NULL,
    FOREIGN KEY (keperluan_id) REFERENCES keperluan(id) ON DELETE CASCADE
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabel tamu berhasil dibuat.<br>";
} else {
    echo "Error membuat tabel tamu: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
>>>>>>> 50aefcf (Menambahkan file create_db.php dan insert_data.php)
