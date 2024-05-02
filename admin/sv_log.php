<?php
session_start();
include "connection.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM mou_user WHERE username='$username' and password='$password'";
$query = mysqli_query($con, $sql);
//mengambil jumlah data yang muncul
$num = mysqli_num_rows($query); 
//mengambil array data
$result = mysqli_fetch_array($query); 

if($num == 0){
    ?>
        <script>
            alert("otentikasi gagal!");
            location.href = "login.php";
        </script>
    <?php
    } else{
        $_SESSION['uname']= $username;
        $_SESSION['fname']= $result['fullname'];
    ?>
        <script>
        location.href = "index.php";
        </script>
    <?php
    }
    ?>