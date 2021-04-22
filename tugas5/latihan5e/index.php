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
</head>
<body>
<div class="container">
    <?php foreach ($otomotif as $om) : ?>
      <p class="nama barang">
        <a href="php/detail.php?id=<?= $om['id'] ?>">
            <?= $om["namabarang"] ?>
        </a>
      </p>
      <?php endforeach; ?>
  </div>
</body>
</html>