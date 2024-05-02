<?php 
include "connection.php";
$idbarang   = $_GET['id'];

$sql = "SELECT * FROM mou_persediaan WHERE idbarang='$idbarang' ";
$query = mysqli_query($con,$sql);
$data  = mysqli_fetch_array($query);


$sql   = "DELETE FROM mou_persediaan WHERE idbarang='$idbarang' ";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=persediaan";
$pesan = "Data berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>