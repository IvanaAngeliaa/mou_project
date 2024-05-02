<?php 
include "connection.php";
$username = $_POST['username'];
$fullname = $_POST['fullname'];
$password = md5($_POST['password']);

$profil = "";
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

    // Tampilkan informasi tentang file yang diunggah
    echo "Nama file yang diunggah: " . $_FILES['profil']['name'] . "<br>";
    echo "Tipe file: " . $_FILES['profil']['type'] . "<br>";
    echo "Ukuran file: " . $_FILES['profil']['size'] . "<br>";
    echo "Lokasi file sementara: " . $_FILES['profil']['tmp_name'] . "<br>";
    echo "Error: " . $_FILES['profil']['error'] . "<br>";
}

$sql   = "INSERT INTO mou_user
            (username,fullname,password,profil) 
          VALUES 
            ('$username','$fullname','$password','$profil')";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=user";
$pesan = "User berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>
