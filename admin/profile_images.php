<?php
session_start();
// Ambil nama file gambar profil dari database atau sistem autentikasi
$profile_image = $_SESSION['images']; // Sesuaikan dengan nama variabel yang Anda gunakan

// Lakukan beberapa pemeriksaan untuk memastikan nama file gambar tidak mengandung karakter yang tidak aman atau menyebabkan kerentanan
// Misalnya, jika nama file diambil dari database, pastikan untuk membersihkan input menggunakan fungsi yang sesuai, seperti mysqli_real_escape_string() atau prepared statements.

// Set lokasi file gambar profil
$profile_image_path = "../images/".$profile_image;
?>
