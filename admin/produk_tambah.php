
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-custom">Manajemen Data Produk</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-custom">
                                Form Tambah Data Produk
                            </h6>
                        </div>
                        <form action="produk_insert.php" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Produk:</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Produk" name="namaproduk" required>
                            </div>
                            <div class="form-group">
                                <label>Harga:</label>
                                <input type="number" class="form-control" placeholder="Masukan harga" name="harga" required>
                            </div>
                            <div class="form-group">
                                <label>Foto:
                                    <sup class="text-danger">Kosongkan jika tidak mengupload foto</sup>
                                </label>
                                <input type="file" class="form-control" placeholder="Masukan foto" name="foto">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi:
                                    <sup class="text-danger">Kosongkan jika tidak mengisi deskripsi</sup>
                                </label>
                                <textarea class="form-control" name="deskripsi" placeholder="Masukan deskripsi produk" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="index.php?menu=produk" class="btn btn-warning">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        </form>
                    </div>

                </div>

