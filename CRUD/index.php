<!DOCTYPE html>
<?php
require_once "db.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="navbar"><a href="add.php">Tambah</a></div>

<h1>Daftar Obat</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>harga</th>
        <th>Kadaluarsa</th>
        <th>x</th>
        <th>y</th>
    </tr>
    <?php $i=0 ?>
    <?php
    sqlSelect();
    while($row= mysqli_fetch_assoc($query_select)):
    ?>
    <tr>
        <td><?= $row['id']?></td>
        <td><?= $row['nama']?></td>
        <td><?= $row['jenis']?></td>
        <td><?= $row['harga']?></td>
        <td><?= $row['kadaluarsa']?></td>
        <td><a href="update.php?id=<?= $row['id']?>" onclick="return confirm('Yakin?');">Ubah</a></td>
        <td><a href="delete.php?id=<?= $row['id']?>" onclick="return confirm('Yakin?');">Hapus</a></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>
</table>
</body>
</html>