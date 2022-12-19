<?php
require_once "db.php";


$id = $_GET['id'] ;

if(isset($_GET['id'])){
    $sql_delete = "DELETE FROM obat WHERE id = $id";
    $query_delete = mysqli_query($db,$sql_delete);
    echo "
    <script>
         alert('Data berhasil dihapus !')
         document.location.href ='index.php'
    </script>
";
}else{
  echo "
        <script>
             alert('Data gagal dihapus !')
             document.location.href ='index.php'
        </script>
  ";
  return $mhs;
}
?>
