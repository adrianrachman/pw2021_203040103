<?php 
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "pw_tubes_203040103");

	return $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam array
function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// fungsi untuk menambahkan data di dalam database
function tambah($data)
{
	$conn = koneksi();

	$gambar = htmlspecialchars($data['gambar']);
	$namabarang = htmlspecialchars($data['namabarang']);
	$deskripsi = htmlspecialchars($data['deskripsi']);
	$harga = htmlspecialchars($data['harga']);
	$merk = htmlspecialchars($data['merk']);
	
	$query = "INSERT INTO otomotif
					VALUES
					('', '$gambar', '$namabarang', '$deskripsi', '$harga', '$merk')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
?>