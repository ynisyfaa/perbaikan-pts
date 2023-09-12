<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM tb_buku");
?>
<!DOCTYPE html>
<head>
    <title>Halaman aplikasi</title>
    <link rel="stylesheet" href="style2.css">
</head>
<div class="container">
<body>
    <h1>Daftar Buku Perpus</h1>
</body>
<a href="tambah.php">Tambah Buku</a>
<br></br>
<table border="1" cellpading="10" cellpacing="0">
    <tr>
        <th>NO.</th>
        <th>Aksi</th>
        <th>judul buku</th>
        <th>pengarang buku</th>
        <th>genre Buku</th>
</tr>

<?php $i = 1; ?>
<?php foreach ( $mahasiswa as $row) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="hapus.php?id='<?= $row["id"]; ?>'" onclick="
            return confirm('yakin?');">hapus</a>
</td>
    <td><?= $row["judul_buku"];?></td>
    <td><?= $row["pengarang_buku"];?></td>
    <td><?= $row["genre_buku"];?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</div>
</table>