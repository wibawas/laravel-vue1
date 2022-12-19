<?php

$db = mysqli_connect("localhost","root","","eduwork");

function sqlSelect(){
    global $db;
    global $query_select;
    $sql_select = "SELECT * FROM obat";
    $query_select = mysqli_query($db,$sql_select);
}

function Update(){
    global $db;
    
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
}