<?php 
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$otomotif = query("SELECT * FROM otomotif")
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
        <?php foreach ($otomotif as $om) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $om["gambar"]; ?>"></td>
                <td><?= $om["nama barang"] ?></td>
                <td><?= $om["deskripsi"] ?></td>
                <td><?= $om["harga"] ?></td>
                <td><?= $om["merk"]?></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>