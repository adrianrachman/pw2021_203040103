<?php
require 'functions.php';

$id = $_GET['id'];
$om = query("SELECT * FROM otomotif WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
					alert('Data berhasil diubah');
					document.location.href = 'admin.php';
				</script>";
	} else {
		echo "<script>
					alert('Data gagal diubah');
					document.location.href = 'admin.php';
				</script>";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Form Ubah Data Otomotif</h3>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $om["id"]; ?>">
		<ul>
			<li>
				<label for="gambar">Gambar :</label><br>
				<input type="file" name="gambar" id="gambar" value="<?= $om["gambar"]; ?>"><br><br>
			</li>
			<li>
				<label for="namabarang">Nama Barang :</label><br>
				<input type="text" name="namabarang" id="namabarang" value="<?= $om["namabarang"]; ?>"><br><br>
			</li>
			<li>
				<label for="deskripsi">Deskripsi :</label><br>
				<input type="text" name="deskripsi" id="deskripsi" value="<?= $om["deskripsi"]; ?>"><br><br>
			</li>
			<li>
				<label for="harga">Harga :</label><br>
				<input type="price" name="harga" id="harga" value="<?= $om["harga"]; ?>"><br><br>
			</li>
			<li>
				<label for="merk">Merk :</label><br>
				<select name="merk" id="merk" required>
					<option value="">-------Pilihan-------</option>
					<option value="Alpinestars">Alpinestars</option>
					<option value="Crossbone">Crossbone</option>
					<option value="Expedition">Expedition</option>
					<option value="Gaerne">Gaerne</option>
					<option value="Orca">Orca</option>
					<option value="Polisport">Polisport</option>
					<option value="Thor">Thor</option>
					<option value="UFO">UFO</option>
					<option value="">-</option>
				</select><br><br>
			</li>
			<br>
			<button type="submit" name="ubah">Ubah  Data</button>
			<button type="submit">
				<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
	</form>
</body>
</html>