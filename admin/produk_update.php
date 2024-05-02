<?php 
include "connection.php";
$idproduk = mysqli_real_escape_string($con,$_POST['idproduk']);
$namaproduk = mysqli_real_escape_string($con,$_POST['namaproduk']);
$harga = mysqli_real_escape_string($con,$_POST['harga']);
$deskripsi = mysqli_real_escape_string($con,$_POST['deskripsi']);

$sql   = "UPDATE mou_produk SET namaproduk='$namaproduk',
								harga='$harga',
								deskripsi='$deskripsi'
								WHERE idproduk='$idproduk'";
$query = mysqli_query($con,$sql);

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
	
	//hapus foto lama
	$sql = "SELECT * FROM mou_produk WHERE idproduk='$idproduk' ";
	$query = mysqli_query($con,$sql);
	$data  = mysqli_fetch_array($query);

	if(!empty($data['foto'])) { 
		unlink("../images/produk/$data[foto]"); //menghapus foto produk yang dihapus
	}

	$sql   = "UPDATE mou_produk SET foto='$foto'
					WHERE idproduk='$idproduk'";
	$query = mysqli_query($con,$sql);

}



$url   = "index.php?menu=produk";
$pesan = "Data berhasil diubah";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>