<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040103");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM Otomotif");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Otomotif</title>
    <style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
        }
        img {
            max-width: 150px;
        }
    </style>
</head>
<body>
<div class="container">
    <table cellpadding="10" cellspacing="0" border="1">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Merk</th>
        </tr>
        <?php $i = 1 ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
                <td><?= $row["nama barang"] ?></td>
                <td><?= $row["deskripsi"] ?></td>
                <td><?= $row["harga"] ?></td>
                <td><?= $row["merk"]?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
    </table>
</div>
</body>
</html>