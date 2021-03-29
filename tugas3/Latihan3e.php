<?php
$otomotif = [
    [
        "Gambar" => "1.jpg",
        "Nama Barang" => "Bike Stand",
        "Deskripsi" => "Sebagai pengganti standar samping",
        "Harga" => "Rp 350.000,00",
        "Merk" => "Polisport",
    ],
    [
        "Gambar" => "2.jpg",
        "Nama Barang" => "Body Protector",
        "Deskripsi" => "Body protector A-1 hitam dan putih ",
        "Harga" => "Rp 1.150.000,00",
        "Merk" => "Alpinestars",
    ],
    [
        "Gambar" => "3.jpg",
        "Nama Barang" => "Boot MX",
        "Deskripsi" => "Size 42, 43, 44, biru, hitam, hijau",
        "Harga" => "Rp 3.000.000,00",
        "Merk" => "Gaerne",
    ],
    [
        "Gambar" => "4.png",
        "Nama Barang" => "Cover Body Kit",
        "Deskripsi" => "Untuk YZ 85",
        "Harga" => "Rp 2.000.000,00",
        "Merk" => "UFO",
    ],
    [
        "Gambar" => "5.jpg",
        "Nama Barang" => "Decal",
        "Deskripsi" => "Bisa custom untuk semua motor trail",
        "Harga" => "Rp 650.000,00",
        "Merk" => "-",
    ],
    [
        "Gambar" => "6.jpg",
        "Nama Barang" => "Goggle MX",
        "Deskripsi" => "Tersedia warna merah,putih,biru dan hijau",
        "Harga" => "Rp 750.000,00",
        "Merk" => "Thor",
    ],
    [
        "Gambar" => "7.jpg",
        "Nama Barang" => "Gloves MX",
        "Deskripsi" => "Tersedia warna merah, biru, hijau, abu-abu dan hitam",
        "Harga" => "Rp 600.000,00",
        "Merk" => "ORCA",
    ],
    [
        "Gambar" => "8.jpg",
        "Nama Barang" => "Jersey",
        "Deskripsi" => "Jersey futsal, volly, basket, racing",
        "Harga" => "Rp 170.000,00",
        "Merk" => "-",
    ],
    [
        "Gambar" => "9.jpg",
        "Nama Barang" => "Foot Step",
        "Deskripsi" => "Tersedia warna merah, gold, hitam, silver",
        "Harga" => "Rp 350.000,00",
        "Merk" => "Expedition",
    ],
    [
        "Gambar" => "10.jpg",
        "Nama Barang" => "Tiedone",
        "Deskripsi" => "Tersedia warna oranye, hitam dan merah",
        "Harga" => "Rp 350.000,00",
        "Merk" => "Crossbone",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
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
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="5">
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Merk</th>
            <tr></tr>
            <?php $nomor = 1;?>
            <?php foreach ($otomotif as $om) : ?>
                <td><?= $nomor; ?></td> 
                <td><img src="img/<?= $om["Gambar"]; ?>"></td>
                <td><?= $om["Nama Barang"] ?></td>
                <td><?= $om["Deskripsi"] ?></td>
                <td><?= $om["Harga"] ?></td>
                <td class = "merk"><?= $om["Merk"] ?></td>
                <tr></tr>
                <?php $nomor++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>