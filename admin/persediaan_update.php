<?php 
include "connection.php";
$idbarang = mysqli_real_escape_string($con,$_POST['idbarang']);
$kategori = mysqli_real_escape_string($con,$_POST['kategori']);
$namabarang = mysqli_real_escape_string($con,$_POST['namabarang']);
$minimalstock = mysqli_real_escape_string($con,$_POST['minimalstock']);
$satuan = mysqli_real_escape_string($con,$_POST['satuan']);


$sql   = "UPDATE mou_persediaan SET kategori='$kategori',
								namabarang='$namabarang',
								minimalstock='$minimalstock',
                                satuan='$satuan'
								WHERE idbarang='$idbarang'";
$query = mysqli_query($con,$sql);


$url   = "index.php?menu=persediaan";
$pesan = "Data berhasil diubah";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>