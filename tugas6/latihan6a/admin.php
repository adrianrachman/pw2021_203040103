<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';
$otomotif = query("SELECT * FROM otomotif");

// tombol cari ditekan
if(isset($_POST["cari"]) ) {
    $otomotif = cari($_POST["keyword"]);
}

?>

<?php if (empty($otomotif)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data tidak ditemukan</h1>
        </td>
    </tr>
<?php endif; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>Otomotif</title>
    <style>
        .table {
            width: 50%;
            padding: 10px;
            font-family: arial;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
            padding: 5px;
            border: 10px;
        }
        img {
            max-width: 100px;
        }
        body {
            background-color: azure;
        }
    </style>
</head>
<body>
    <h1>SHU MX SHOP</h1>
	<div class="add">
     <a href="tambah.php"><button>Tambah Data</button></a>
     <form action="" method="post"> <br>
         <input type="text" name="keyword" autofocus autocomplete="off"><br><br>
         <button type="submit" name="cari">Cari</button>
         <button type="submit" name="kembali">Kembali</button>
     </form> 
     <br>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
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
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>