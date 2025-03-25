<<<<<<< HEAD
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
=======
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buku_tamu";

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Insert data ke tabel keperluan
$sql = "INSERT INTO keperluan (deskripsi) VALUES 
        ('Meeting'), ('Interview'), ('Kunjungan')";
if ($conn->query($sql) === TRUE) {
    echo "Data keperluan berhasil ditambahkan.<br>";
} else {
    echo "Error: " . $conn->error;
}

// Insert data ke tabel tamu
$sql = "INSERT INTO tamu (nama, email, pesan, keperluan_id) VALUES 
        ('Abyaz', 'abyaz@example.com', 'Saya ingin bertemu dengan manajer.', 1),
        ('Kaisar', 'kaisar@example.com', 'Saya datang untuk wawancara.', 2)";
if ($conn->query($sql) === TRUE) {
    echo "Data tamu berhasil ditambahkan.<br>";
} else {
    echo "Error: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
>>>>>>> 50aefcf (Menambahkan file create_db.php dan insert_data.php)
