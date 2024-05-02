<?php 
include "connection.php";
$idpakai = mysqli_real_escape_string($con,$_POST['idpakai']);
$id = mysqli_real_escape_string($con,$_POST['id']);
$stock = mysqli_real_escape_string($con,$_POST['stock']);
$tanggal = mysqli_real_escape_string($con,$_POST['tanggal']);
$kadaluarsa = mysqli_real_escape_string($con,$_POST['kadaluarsa']);
$status = mysqli_real_escape_string($con,$_POST['status']);

$sql   = "UPDATE mou_pemakaian SET stock='$stock',
								tanggal='$tanggal',
								kadaluarsa='$kadaluarsa',
                                status='$status'
								WHERE idpakai='$idpakai' AND id='$id'";
$query = mysqli_query($con,$sql);
$url   = "index.php?menu=persediaan";
$pesan = "Data berhasil diubah";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>