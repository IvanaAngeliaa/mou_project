<?php 
include "connection.php";

$kategori = mysqli_real_escape_string($con,$_POST['kategori']);
$namabarang = mysqli_real_escape_string($con,$_POST['namabarang']);
$minimalstock = mysqli_real_escape_string($con,$_POST['minimalstock']);
$satuan = mysqli_real_escape_string($con,$_POST['satuan']);
// $tanggalmasuk = mysqli_real_escape_string($con,$_POST['tanggalmasuk']);
// $kadaluarsa = mysqli_real_escape_string($con,$_POST['kadaluarsa']);
// $status = mysqli_real_escape_string($con,$_POST['status']);



$sql   = "INSERT INTO mou_persediaan
			(kategori_id,namabarang,minimalstock,satuan) 
		  VALUES 
		    ('$kategori','$namabarang','$minimalstock','$satuan')";
$query = mysqli_query($con,$sql);


$url   = "index.php?menu=persediaan";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>