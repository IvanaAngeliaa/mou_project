<?php 
include "connection.php";
$id   = $_GET['id'];

$sql = "SELECT * FROM mou_pemakaian WHERE id='$id' ";
$query = mysqli_query($con,$sql);
$data  = mysqli_fetch_array($query);


$sql   = "DELETE FROM mou_pemakaian WHERE id='$id' ";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=persediaan";
$pesan = "Data berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>