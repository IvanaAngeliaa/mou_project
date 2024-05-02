
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-custom">Manajemen Persediaan Barang</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-custom">
            Form Tambah Persediaan Barang
        </h6>
    </div>
    <form action="persediaan_insert.php" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
            <label>Kategori:</label>
            <select name="kategori" class="form-control" require>
                 <option value=""selected disabled hidden>Pilih Kategori</option>
                    <?php
                        $sqlcekID="SELECT * FROM mou_kategori";
                        $query=mysqli_query($con,$sqlcekID);
                        while($row=mysqli_fetch_array($query))
                        {
                            echo "<option value='" . $row['idkategori'] . "'>" . $row['namakategori'] . "</option>";
                        }
                    ?>
            </select>
        </div>
        <div class="form-group">
            <label>Nama Barang:</label>
            <input type="text" class="form-control" placeholder=" Masukan Nama Barang" name="namabarang" required>
        </div>
        <div class="form-group">
            <label>Minimal Stock:</label>
            <input type="number" class="form-control" placeholder=" Masukan minimal stock" name="minimalstock" required>
        </div>
        <div class="form-group">
            <label>Satuan:</label>
            <!-- <input type="text" class="form-control" placeholder="Pilih Satuan" name="satuan" required> -->
            <select name="satuan" class="form-control">
                <option value=""selected disabled hidden>Pilih Satuan</option>
                <option value="mika">Mika</option>
                <option value="gram">Gram</option>
                <option value="pcs">Pcs</option>
            </select>
        </div>
        <!-- <div class="form-group">
            <label>Tanggal Masuk:</label>
            <input type="date" class="form-control" placeholder=" Pilih tanggal" name="tanggalmasuk" required>
        </div> -->
        <!-- <div class="form-group">
            <label>Kadaluarsa:</label>
            <input type="date" class="form-control" placeholder=" Pilih tanggal" name="kadaluarsa" required>
        </div> -->
        
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

