<!DOCTYPE html>
<?php
require_once "db.php"
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Update Data</h1>
<a href="index.php">Home</a>
<?php
$id = $_GET['id'];
    $sql_view_update = "SELECT * FROM obat WHERE id = $id";
    $query_view_update = mysqli_query($db,$sql_view_update);
    $row= mysqli_fetch_assoc($query_view_update);

    if(isset($_POST['submit'])){
        $nama = htmlspecialchars($_POST['nama']);
        $jenis = htmlspecialchars($_POST['jenis']);
        $harga = htmlspecialchars($_POST['harga']);
        $kadaluarsa= htmlspecialchars($_POST['kadaluarsa']);

        $sql_update = "UPDATE obat SET
        nama = '$nama',
        jenis = '$jenis',
        harga = '$harga',
        kadaluarsa = '$kadaluarsa'
        WHERE id = $id
        ";

        $query_update = mysqli_query($db,$sql_update);

        if($query_update){
            echo "
            <script>
                alert('Data Berhasil diubah !')
                document.location.href ='index.php'
            </script>";
        }else{
            echo "
                <script>
                    alert('Data Gagal diubah !')
                    document.location.href ='index.php'
                </script>
            "; 
        }
        
    }
?>
<form action="" method="post">
    
    <ul>
        <li>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required value="<?=$row['nama'] ?>">
        </li>
        <li>
            <label for="jenis">Jenis</label>
            <input type="text" name="jenis" id="jenis" required value="<?=$row['jenis'] ?>">
        </li>
        <li>
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" required value="<?=$row['harga'] ?>">
        </li>
        <li>
            <label for="kadaluarsa">Kadaluarsa</label>
            <input type="date" name="kadaluarsa" id="kadaluarsa" required value="<?=$row['kadaluarsa'] ?>">
        </li>
        <li>
            <button type="submit" name="submit">Update Data</button>
        </li>
    </ul>
</form>
</body>
</html>