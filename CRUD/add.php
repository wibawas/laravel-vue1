<!DOCTYPE html>
<?php
require_once "db.php";

if(isset($_POST['submit'])){
    $nama = htmlspecialchars($_POST['nama']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $harga = htmlspecialchars($_POST['harga']);
    $kadaluarsa = htmlspecialchars($_POST['kadaluarsa']);

    $sql_add_data = "INSERT INTO obat value ('','$nama','$jenis','$harga','$kadaluarsa',1)";
    $query_add_data = mysqli_query($db,$sql_add_data);

    if($query_add_data){
        echo "
        <script>
             alert('Data berhasil ditambahkan !')
             document.location.href ='index.php'
        </script>
  ";
    }else {
        "
              <script>
                   alert('Data gagal ditambahkan !')
                   document.location.href ='index.php'
              </script>
        ";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="navbar"><a href="index.php">Home</a></div>
    <h1>Tambah Data</h1>
    <form action="" method="post" >
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama"
                required>
            </li>
            <li>
                <label for="jenis">Jenis</label>
                <input type="text" name="jenis" id="jenis"
                required>
            </li>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga"
                required>
            </li>
            <li>
                <label for="kadaluarsa">Kadaluarsa</label>
                <input type="date" name="kadaluarsa" id="kadaluarsa"
                required>
            </li>
           
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>
</body>
</html>