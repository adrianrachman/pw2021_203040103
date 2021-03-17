<?php
/*
Adrian Rachman
203040103
Shift Kamis 8.00 - 9.00
*/
?>

<?php 
$player = [
	"Cristiano Ronaldo" => "Juventus",
	"Lionel Messi" => "Barcelona",
	"Luca Modric" => "Real Madrid",
	"Mohammad Salah" => "Liverpool",
	"Neymar Jr" => "Paris Saint Germain",
	"Sadio Mane" => "Liverpool",
	"Zlatan Ibrahimovic" => "Ac Milan",
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan3c</title>
	<style>
		.tabel {
			border: 1px solid black;
			padding: 10px;
			text-align: left;
			font-family: arial;
			width: 50%;
			font-size: 12px;
		}
	</style>
</head>
<body>
	<div class="tabel">
		<p><b>Daftar pemain bola terkenal dan clubnya</b></p>
		<table>
			<?php foreach($player as $ply => $club) : ?>
				<td><b><?= $ply;?></b></td>
				<td>:</td>
				<td><?= $club;?></td>
				<tr></tr>
			<?php endforeach; ?>
		</table>
	</div>
</body>
</html>