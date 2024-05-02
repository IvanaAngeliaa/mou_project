                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">List Produk</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        

                            <?php
                            $no =1;
                            $sql="SELECT * FROM produk 
                                    LEFT JOIN kategori USING (idk)";
                            $query=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($query))
                            {
                                $link_hapus= "produk_delete.php?id=$row[idproduk]";
                                $link_edit = "index.php?menu=produk&aksi=edit&id=$row[idproduk]";
                                
                                $foto = "default.jpg";
                                if(!empty($row['foto'])) { $foto = $row['foto']; }
                                $link_foto = "./images/produk/$foto";
                            ?>                        
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card  h-100 ">
                                        <div class="card-body">
                                            <div align="center" style="font-weight:bold;" class="text-primary">
                                                <?=$row['namaproduk'];?>
                                            </div>
                                            <img src="<?=$link_foto;?>" class="col-sm-12">
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-success" style="font-weight:bold;">
                                                Rp <?=number_format($row['harga'],0,'.',',');?>
                                            </div>
                                            <div >
                                                <a href="" class="btn btn-info col-sm-12">
                                                    <i class="fas fa-shopping-cart"></i> Beli Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            $no++;
                            }
                            ?>
                            
                        
                    </div>
                    <!-- Content Row -->

                </div>