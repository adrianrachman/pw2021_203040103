<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';

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
	<table border="1" cellspacing="13" cellspacing="0">
		<tr>
			<th>#</th>
			<th>opsi</th>
			<th>Gambar</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Merk</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($otomotif as $om) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href=""><button>Ubah</button></a>
					<a href=""><button>Hapus</button></a>
				</td>
				<td><img src="../assets/img/<?= $om['gambar']; ?>" alt=""></td>
				<td><?= $om['namabarang']; ?></td>
                <td><?= $om['deskripsi']; ?></td>
                <td><?= $om['harga']; ?></td>
                <td>Rp <?= $om['merk']; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>