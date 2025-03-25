<?php
include 'koneksi.php';

$sql = "SELECT tamu.nama, tamu.email, tamu.pesan, keperluan.deskripsi 
        FROM tamu 
        JOIN keperluan ON tamu.keperluan_id = keperluan.id 
        LIMIT 5";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tamu</title>
</head>
<body>
    <h2>Daftar Tamu</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Keperluan</th>
            <th>Pesan</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['deskripsi']; ?></td>
            <td><?= $row['pesan']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
