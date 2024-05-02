
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-custom">Manajemen Data User</h1>
                
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-custom">
                                Form Tambah Data User
                            </h6>
                        </div>
                        <form action="user_insert.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Username :</label>
                                <input type="text" class="form-control" placeholder="Masukan username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" placeholder="Masukan fullname" name="fullname" required>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" placeholder="Masukan password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>Profil:
                                    <sup class="text-danger">Kosongkan jika tidak mengupload foto</sup>
                                </label>
                                <input type="file" class="form-control" placeholder="Masukan foto" name="profil">
                            </div>
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

