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
	<div class="add">
     <a href="tambah.php"><button>Tambah Data</button></a>   
    </div>
    <table border="1" cellspacing="13" cellspacing="0">
		<tr>
			<th>No</th>
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
					<a href="ubah.php?id=<?= $om['id'] ?>"><button>Ubah</button></a>
					<a href="hapus.php?id=<?= $om['id'] ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
				</td>
				<td><img src="../assets/img/<?= $om["gambar"]; ?>" alt=""></td>
				<td><?= $om["namabarang"]; ?></td>
                <td><?= $om["deskripsi"]; ?></td>
                <td><?= $om["harga"]; ?></td>
                <td><?= $om["merk"]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>