<?php
include "admin/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mou Crepes</title>
    <link rel="icon" href="assets/mou.svg">

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/63ea1b842d.js" crossorigin="anonymous"></script>
</head>

<body>

    <section id="nav">
        <div class="fContainer">
            <nav class="wrapper">
                <div class="brand">
                    <img src="assets/mou.svg" alt="" width="200%" height="40%">
                </div>

                <ul class="navigasi">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#product">Product</a></li>
                    <li><a href="#info">Information</a></li>
                    <li><a href="#testi1">Testimonials</a></li>
                    <li><a href="./admin/index.php"><i class="fas fa-user"></i></a></li>
                </ul>

                <div class="icon">
                    <i class="fa-brands fa-instagram" onclick="link_instagram()"></i>
                </div>
            </nav>
        </div>
    </section>


    <section id="home">
        <div id="home-text">
            <h2>"I Want More, 
                I Want Mou Crepes!"</h2>
            <p> Mou Mille Crepes <b>Pontianak</b> merupakan Mille Crepes dengan lapisan crepe yang lembut serta lapisan
                whipcream yang manis dan fresh dengan
                bahan yang premium. </p>
            <left><span class="order" onclick="link_instagram()"><a> Order Now </a></span></left>
        </div>
        <div id="home-image">
            <img src="assets/matchahome.svg" alt="" width="75%" height="auto">
        </div>
    </section>


    <section class="menu" id="product" style="padding:20px 0px;">
        <div id="product-text">
            <h1>Menu</h1>
            <h2>Our Menu</h2>
        </div>

        <div class="variant">

        <?php
            $no =1;
            $sql="SELECT * FROM mou_produk";
            $query=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($query))
            {
                //$link_hapus= "produk_delete.php?id=$row[idproduk]";
                //$link_edit = "index.php?menu=produk&aksi=edit&id=$row[idproduk]";
                
                $foto = "default.jpg";
                if(!empty($row['foto'])) { $foto = $row['foto']; }
                $link_foto = "./images/produk/$foto";
        ?>
            <div class="kotak-menu">
                <div class="kotak1">
                    <div class="variant-image">
                        <img src="<?=$link_foto;?>" width="80%">
                    </div>
                    <h3><?=$row['namaproduk'];?></h3>
                    <p><?=$row['deskripsi'];?></p>
                    <h2>IDR <?=number_format($row['harga'],0,",",".");?><a>/slice</a></h2>

                    <center><span class="order3" onclick="link_instagram()"> I Want To Order </span></center>
                </div>
            </div>
        <?php 
            $no++;
            }
        ?>
    <!--
            <div class="kotak-menu">
                <div class="kotak1">
                    <div class="variant-image">
                        <img src="assets/product1.svg" width="80%">
                    </div>
                    <h3>Tiramisu</h3>
                    <p>Tiramisu Mille Crepes dengan lapisan crepe yang berciri khas kopi dan whip cream dengan campuran
                    mascarpone serta taburan bubuk kakao diatasnya.</p>
                    <h2>IDR 18K <a>/slice</a></h2>

                    <center><span class="order3" onclick="link_instagram()"> I Want To Order </span></center>
                </div>
            </div>

            <div class="kotak-menu">
                <div class="kotak2">
                    <div class="variant-image">
                        <img src="assets/product2.svg" width="80%">
                    </div>
                    <h3>Moucha</h3>
                    <p>Moucha Mille Crepes merupakan lapisan crepes yang berciri khas matcha dengan whipcream rasa
                    matcha serta taburan scrumble matcha diatasnya.</p>
                    <h2>IDR 17K <a>/slice</a></h2>

                    <center><span class="order3" onclick="link_instagram()"> I Want To Order </span></center>       
                </div>
            </div>
        -->
        </div>
    </section>


    <section id="info" style="padding:100px 0px;">
        <div class="container-cardinfo">
            <div class="card1">
                    <div class="back">
                        <img class="gambar" src="assets/OI.svg">
                        <h2>Ordering Information</h2>
                    </div>

                    <div class="front">
                        <div class="text-ctr">
                            <h2>More Info</h2>
                            <p>Pemesanan Mille Crepes melalui sistem <i>Pre-Order (PO)</i> via chat Instagram @mou.crepes untuk
                            pemesanan Mille Crepes perslice maupun perloyang.</p>
                        </div>
                    </div>
            </div>

            <div class="video">
                <video autoplay loop muted src="video/promosi.mov" width="100%"></video>
            </div>

            <div class="card2">
                <div class="back">
                    <img class="gambar" src="assets/SI.svg">
                    <h2>Shipping Information</h2>
                </div>

                <div class="front">
                    <div class="text-ctr">
                        <h2>More Info</h2>
                        <p><i>Free Ongkir</i> dengan minimum pembelian 3 slice maupun perloyang untuk daerah
                        Siantan dan untuk luar daerah siantan dikenakan biaya ongkir sebesar Rp 7.000,-</p>
                    </div>
                </div>
            </div>
        </div>  
</section>


    <section class="testi" id="testi1" style="padding:40px 0px;">
        <div id="testi-text">
            <h2>Testimonials</h2>
            <h3>What They Said?</h3>
        </div>

        <div class="slider-frame">
            <div class="slide-images">
                <div class="img-container">
                    <img src="assets/1.svg" style="border-radius: 15px;">
                </div>
                <div class="img-container">
                    <img src="assets/2.svg" style="border-radius: 15px;">
                </div>
                <div class="img-container">
                    <img src="assets/3.svg" style="border-radius: 15px;">
                </div>
                <div class="img-container">
                    <img src="assets/4.svg" style="border-radius: 15px;">
                </div>
                <div class="img-container">
                    <img src="assets/5.svg" style="border-radius: 15px;">
                </div>
                <div class="img-container">
                    <img src="assets/6.svg" style="border-radius: 15px;">
                </div>
                <div class="img-container">
                    <img src="assets/7.svg" style="border-radius: 15px;">
                </div>
                <div class="img-container">
                    <img src="assets/8.svg" style="border-radius: 15px;">
                </div>
                <div class="img-container">
                    <img src="assets/9.svg" style="border-radius: 15px;">
                </div>
            </div>
        </div> 
    </section>


    <section id="footer">
        <div class="footer-container">
            <div class="footer-left">
                    <div class="footer-logo">
                        <img src="assets/mou.svg" width="80px" height="auto">
                    </div>
            <br></br>
                <div class="footer-text2">
                    <p> Mou Mille Crepes <b>Pontianak</b> merupakan Mille Crepes dengan lapisan crepe yang lembut serta lapisan
                    whipcream yang manis dan fresh dengan
                    bahan-bahan yang premium. </p>
                </div>
            </div>
        
            <div class="contact-form">
                <blockquote 
                class="instagram-media"
                data-instgrm-permalink="https://www.instagram.com/mou.crepes/"
                data-instgrm-version="14"
                ></blockquote>
            </div>

            <div class="footer-right">
                <div class="footer-text">
                    <h2>Contact Us</h2>
                </div>
                <div class="QR">
                    <img src="kodeQR/mouqr.svg" alt="" width="160px" height="auto">
                </div> 
            </div>  
        </div>

        <div class="copyright">
            <center> Copyright © 2023, Mou Crepes. All Rights Reserved.</center>
        </div>
    </section>
</body>

<script>
    const body = document.querySelector("body"),
        nav = document.querySelector("nav");

    function link_instagram() {
        window.open('https://instagram.com/mou.crepes?igshid=YmMyMTA2M2Y=', '_blank');
    }
</script>

<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script async src="//www.instagram.com/embed.js"></script>
 
</html>