<?php 
$aksi = isset($_GET['aksi'])?$_GET['aksi']:"";
if($aksi == "tambah") { include "user_tambah.php"; }
else if($aksi == "edit") { include "user_edit.php"; }
else {
?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-primaryx" style="color:#e0ba75";>Manajemen Data User</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primaryx" style="color:#e0ba75";>
                                Data User
                            </h6>
                        </div>
                        <div class="card-body">
                            <a href="index.php?menu=user&aksi=tambah" class="btn btn-custom" >
                                <i class="fas fa-plus"></i> Tambah
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="50">ID</th>
                                            <th width="100">Username</th>
                                            <th width="100">Full Name</th>
                                            <!-- <th width="75">Password</th> -->
                                            <th width="75">Foto</th>
                                            <th width="100">aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        $sql="SELECT * FROM mou_user";
                                        $query=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($query))
                                        {
                                            $link_hapus= "user_delete.php?id=$row[id]";
                                            $link_edit = "index.php?menu=user&aksi=edit&id=$row[id]";
                                            
                                            $foto = "default.jpg";
                                            if(!empty($row['foto'])) { $foto = $row['foto']; }
                                            $link_foto = "../images/produk/$foto";
                                        ?>
                                        <tr>
                                            <td><?=$no;?></td>
                                            <td><?=$row['username'];?></td>
                                            <td><?=$row['fullname'];?></td>
                                            <!-- <td align="right"><?=$row['password'];?></td> -->

                                            <td>
                                                <img src="<?=$link_foto;?>" width="75" height="75">
                                            </td>
                                            
                                            <td>
                                                <a href="<?=$link_edit;?>" class="btn btn-success" >
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?=$link_hapus;?>" class="btn btn-danger" onclick="return confirm('Apakah ingin menghapus user?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php 
                                        $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

<?php 
}
?>