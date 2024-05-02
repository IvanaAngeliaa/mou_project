<?php 
include "connection.php";
$id = mysqli_real_escape_string($con,$_POST['id']);
$username = mysqli_real_escape_string($con,$_POST['username']);
$fullname = mysqli_real_escape_string($con,$_POST['fullname']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$password = md5($password);


$foto_cek = $_FILES['profil']['name'];

if($foto_cek != "")
{
	$folder   = "../images/"; //folder tempat upload gambar
	$tmp_name = $_FILES['profil']['tmp_name']; //file yg diupload
	$name = md5(date("YmdHis"));
	$split = explode(".",$foto_cek); //membagi nama string berdasarkan titik
	$ext_file = end($split); //nama ekstensi file, cth: jpg atau png 
	$profil = $name.".".$ext_file; //gabungkan nama foto baru dengan ekstensi
	move_uploaded_file($tmp_name, "$folder/$profil"); 
	
	//hapus foto lama
	$sql = "SELECT * FROM mou_user WHERE id='$id' ";
	$query = mysqli_query($con,$sql);
	$data  = mysqli_fetch_array($query);

	if(!empty($data['profil'])) { 
		unlink("../images/$data[profil]"); //menghapus foto produk yang dihapus
	}

	$sql   = "UPDATE mou_user SET profil='$profil'
					WHERE id='$id'";
	$query = mysqli_query($con,$sql);

}

$sql   = "UPDATE mou_user SET username='$username',
                            fullname='$fullname',
                            password='$password',
                            profil='$profil'
                            WHERE id='$id'";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=user";
$pesan = "User berhasil diubah";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>