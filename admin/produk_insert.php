<?php 
include "connection.php";

$namaproduk = mysqli_real_escape_string($con,$_POST['namaproduk']);
$harga = mysqli_real_escape_string($con,$_POST['harga']);
$deskripsi = mysqli_real_escape_string($con,$_POST['deskripsi']);

$foto = "";
$foto_cek = $_FILES['foto']['name'];

if($foto_cek != "")
{
	$folder   = "../images/produk"; //folder tempat upload gambar
	$tmp_name = $_FILES['foto']['tmp_name']; //file yg diupload
	$name = md5(date("YmdHis"));
	$split = explode(".",$foto_cek); //membagi nama string berdasarkan titik
	$ext_file = end($split); //nama ekstensi file, cth: jpg atau png 
	$foto = $name.".".$ext_file; //gabungkan nama foto baru dengan ekstensi
	move_uploaded_file($tmp_name, "$folder/$foto"); 
}

$sql   = "INSERT INTO mou_produk
			(namaproduk,harga,deskripsi,foto) 
		  VALUES 
		    ('$namaproduk','$harga','$deskripsi','$foto')";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=produk";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>