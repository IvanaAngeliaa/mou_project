<?php 
include "connection.php";
$id   = $_GET['id'];

$sql   = "DELETE FROM mou_user WHERE id='$id' ";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=user";
$pesan = "User berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>