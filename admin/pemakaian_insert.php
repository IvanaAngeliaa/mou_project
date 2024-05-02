<?php 
include "connection.php";

$id = mysqli_real_escape_string($con,$_POST['id']);
$stock = mysqli_real_escape_string($con,$_POST['stock']);
$tanggal = mysqli_real_escape_string($con,$_POST['tanggal']);
$kadaluarsa = mysqli_real_escape_string($con,$_POST['kadaluarsa']);
$status = mysqli_real_escape_string($con,$_POST['status']);


$sql   = "INSERT INTO mou_pemakaian
			(id,stock,tanggal,kadaluarsa,status) 
		  VALUES 
		    ('$id','$stock','$tanggal','$kadaluarsa','$status')";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=persediaan";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>