<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title> 
</head>
<body>
    <table border="1" cellspacing="0" cellspacing="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>kolom <?= $i; ?></th>
                <?php endfor; ?>
        </tr>

                <!-- Tambahkan baris kode php untuk menampilkan body table
    </table>
</body>
</html>