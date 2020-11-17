<?php 
    //koneksi database
    require "functions.php";
    $mahasiswa = query("SELECT * FROM mahasiswa");
 ?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="insert.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. urut</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $number = 1; ?>
        <?php foreach( $mahasiswa as $row) : ?>
        <tr>
            <td><?= $number; ?></td>
            <td><a href="">Ubah</a> |
                <a href="delete.php?id=<?= $row["id"] ?>" "onclick="return confirm("yakin?")>Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"] ?>" width="70px" height="70px"></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $number++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>