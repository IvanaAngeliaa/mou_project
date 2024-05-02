<?php 
$idbarang = isset($_GET['id'])?$_GET['id']:"";
$idbarang = mysqli_real_escape_string($con,$idbarang);
$sql = "SELECT * FROM mou_persediaan WHERE idbarang='$idbarang'";
$query = mysqli_query($con,$sql);
$data  = mysqli_fetch_array($query);
?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-custom">Manajemen Persediaan Barang</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-custom">
                                Form Edit Persediaan Barang
                            </h6>
                        </div>
                        <form action="persediaan_update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="idbarang" value="<?=$data['idbarang'];?>">
                        <div class="card-body">
                            <!-- <div class="form-group">
                                <label>Kategori:</label>
                                <input type="text" class="form-control" placeholder="Pilih Kategori" name="kategori" required value="<?=$data['kategori'];?>">
                                <select name="kategori" class="form-control">
                                    <option value=""selected disabled hidden>Pilih Kategori</option>
                                    <option value="bahan baku">Bahan Baku</option>
                                    <option value="kemasan">Kemasan</option>
                                    <option value="peralatan">Peralatan</option>
                                </select>
                            </div> -->
                            <!-- <div class="form-group">
                                <label>Nama Barang:</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Barang" name="namabarang" required value="<?=$data['namabarang'];?>">
                            </div> -->

                            <div class="form-group">
                                <label>Stock: 
                                    <sup class="text-danger"> Minimal Stock <?php=$data['minimalstock']; ?>
                                    </sup>
                                </label>
                                <input type="number" class="form-control" placeholder="Masukan stock" name="stock" required value="<?=$data['stock'];?>">
                            </div>
                            <!-- <div class="form-group">
                                <label>Satuan:</label>
                                <input type="text" class="form-control" placeholder="Pilih Satuan" name="satuan" required value="<?=$data['satuan'];?>">
         d                       <select name="satuan" class="form-control">
                                    <option value=""selected disabled hidden>Pilih Satuan</option>
                                    <option value="mika">Mika</option>
                                    <option value="gram">Gram</option>
                                    <option value="pcs">Pcs</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label>Tanggal:</label>
                                <input type="date" class="form-control" placeholder="Pilih tanggal" name="tanggalmasuk" required value="<?=$data['tanggalmasuk'];?>">
                            </div>
                            <div class="form-group">
                                <label>Kadaluarsa:</label>
                                <input type="date" class="form-control" placeholder="Pilih tanggal" name="kadaluarsa" required value="<?=$data['kadaluarsa'];?>">
                            </div>
                    
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="index.php?menu=persediaan" class="btn btn-warning">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        </form>
                    </div>

                </div>

