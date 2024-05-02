
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-custom">Manajemen Pemakaian Barang</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-custom">
            Form Pemakaian Barang
        </h6>
    </div>
    <form action="pemakaian_insert.php" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
            <label>ID Barang:</label>
            <!-- <input type="text" class="form-control" placeholder=" " name="idbarang" required> -->
            <select name="id" class="form-control" required value="<?=$data['idbarang'];?>">
                 <option value=""selected disabled hidden>Pilih ID</option>
                    <?php
                        $sqlcekID="SELECT idbarang FROM mou_persediaan";
                        $query=mysqli_query($con,$sqlcekID);
                        while($row=mysqli_fetch_array($query))
                        {
                            echo "<option value='" . $row['idbarang'] . "'>" . $row['idbarang'] . "</option>";
                        }
                    ?>
            </select>
        </div>
        <div class="form-group">
            <label>Stock:</label>
            <input type="number" class="form-control" placeholder=" Masukan Jumlah Stock" name="stock" required>
        </div>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" class="form-control" placeholder=" Pilih tanggal" name="tanggal" required>
        </div>
        <div class="form-group">
            <label>Kadaluarsa:</label>
            <input type="date" class="form-control" placeholder=" Pilih tanggal" name="kadaluarsa">
        </div>
        <div class="form-group">
            <label>Status:</label>
            <!-- <input type="date" class="form-control" placeholder=" Pilih tanggal" name="status" required> -->
            <select name="status" class="form-control">
                <option value=""selected disabled hidden>Pilih Status</option>
                <option value="masuk">Masuk</option>
                <option value="keluar">Keluar</option>
            </select>
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

