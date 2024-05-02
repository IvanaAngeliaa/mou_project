<?php 
$id = isset($_GET['id'])?$_GET['id']:"";
$id = mysqli_real_escape_string($con,$id);
$sql = "SELECT * FROM mou_user WHERE id='$id' ";
$query = mysqli_query($con,$sql);
$data  = mysqli_fetch_array($query);
?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-primaryx" style="color:#e0ba75";>Manajemen Data User</h1>
            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold " style="color:#e0ba75";>
                                Form Edit Data User
                            </h6>
                        </div>
                        <form action="user_update.php" method="post">
                        <input type="hidden" name="id" value="<?=$data['id'];?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" placeholder="Masukan username " name="username" required value="<?=$data['username'];?>">
                            </div>
                            <div class="form-group">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" placeholder="Masukan full name" name="fullname" required value="<?=$data['fullname'];?>">
                            </div>
                            <div class="form-group">
                                <label>Password: <sup class="text-danger">Kosongkan jika tidak mengubah password</sup></label>
                                <input type="password" class="form-control" placeholder="Masukan password" name="password" >
                            </div>
                            <div class="form-group">
                                <label>Profil:
                                    <sup class="text-danger">Kosongkan jika tidak mengupload foto</sup>
                                </label>
                                <input type="file" class="form-control" placeholder="Masukan foto" name="profil">
                                <div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="index.php?menu=user" class="btn btn-warning">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        </form>
                    </div>

                </div>

