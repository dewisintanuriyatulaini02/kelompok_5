<?php
require ('functions.php');
//ambil data santri
$santri = query("SELECT * FROM id_buku");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
  
</head>


<body>
<h1>DATA BUKU</h1>

<table border="1" cellpadding="10" celspacing="0">
    <tr>
        <th>kd_buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>ISBN</th>
        <th>Jumlah</th>
    </tr>
    <?php $i = 1; ?>

    <?php foreach ($santri as $row) : ?>

        <tr>

        <td><?= $i; ?></td>
        <td><?= $row["kd_buku"];  ?></td>
        <td><?= $row["Judul"]; ?></td>
        <td><?= $row["Pengarang"]; ?></td>
        <td><?= $row["Penerbit"]; ?></td>
        <td><?= $row["Tahun Terbit"]; ?></td>
        <td><?= $row["ISBN"]; ?></td>
        <td><?= $row["Jumlah"]; ?></td>
        
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</table>
</body>
</html>
