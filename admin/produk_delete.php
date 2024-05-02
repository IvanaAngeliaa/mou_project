<?php 
include "connection.php";
$idproduk   = $_GET['id'];

$sql = "SELECT * FROM mou_produk WHERE idproduk='$idproduk' ";
$query = mysqli_query($con,$sql);
$data  = mysqli_fetch_array($query);

if(!empty($data['foto'])) { 
    unlink("../images/produk/$data[foto]"); //menghapus foto produk yang dihapus
}

$sql   = "DELETE FROM mou_produk WHERE idproduk='$idproduk' ";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=produk";
$pesan = "Data berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>