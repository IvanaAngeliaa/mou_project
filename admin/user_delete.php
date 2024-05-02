<?php 
include "connection.php";
$id   = $_GET['id'];

$sql   = "DELETE FROM mou_user WHERE id='$id' ";
$query = mysqli_query($con,$sql);

$url   = "index.html?menu=user";
$pesan = "User berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>