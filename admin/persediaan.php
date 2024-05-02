<?php 
$aksi = isset($_GET['aksi'])?$_GET['aksi']:"";
if($aksi == "tambah") { include "persediaan_tambah.php"; }
else if($aksi == "edit") { include "persediaan_edit.php"; }
else if($aksi == "pakai") { include "pemakaian_tambah.php"; }
else if($aksi == "ubah") { include "pemakaian_edit.php"; }
else {
?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-primaryx" style="color:#e0ba75";>Manajemen Persediaan Barang</h1>

                    <!-- Info tabel -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold" style="color:#e0ba75";>
                               Informasi Persediaan Barang
                            </h6>

                            <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="75">Id Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Stock</th>
                                            <th>Satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        $sql = "SELECT p.idbarang, p.namabarang, p.kategori_id, p.minimalstock, p.satuan, 
                                                    SUM(CASE WHEN m.status = 'masuk' THEN m.stock ELSE 0 END) AS total_stock_masuk,
                                                    SUM(CASE WHEN m.status = 'keluar' THEN m.stock ELSE 0 END) AS total_stock_keluar
                                                FROM mou_persediaan p
                                                LEFT JOIN mou_pemakaian m ON p.idbarang = m.id
                                                GROUP BY p.idbarang";
                                        $query = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($query)) {
                                            $total_stock = $row['total_stock_masuk'] - $row['total_stock_keluar'];
                                            if($total_stock < $row['minimalstock']){
                                                if($total_stock < 0){
                                                    $total_stock = 0;
                                                }
                                                $style = 'color: red ; font-weight: bold;';
                                            }

                                            if($row['kategori_id'] == 1){
                                                $kategori = "Bahan Baku";
                                            } elseif($row['kategori_id'] == 2){
                                                $kategori = "Kemasan";
                                            } elseif($row['kategori_id'] == 3){
                                                $kategori = "Peralatan";
                                            } elseif($row['kategori_id'] == 4){
                                                $kategori = "Barang Habis Pakai";
                                            }
                                        ?>
                                            <tr>
                                                <td><?= $row['idbarang']; ?></td>
                                                <td><?= $row['namabarang']; ?></td>
                                                <td><?= $kategori; ?></td>
                                                <td style="<?= $style;?>"><?= $total_stock; ?></td>
                                                <td><?= $row['satuan']; ?></td>
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

                    <!-- tabel edit -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold" style="color:#e0ba75";>
                                Persediaan Barang
                            </h6>

                        <div class="card-body">
                            <a href="index.php?menu=persediaan&aksi=tambah" class="btn btn-custom">
                                <i class="fas fa-plus"></i> Tambah
                            </a>

                            <a href="index.php?menu=persediaan&aksi=pakai" class="btn btn-custom">
                                <i class="fas fa-edit"></i> Pemakaian
                            </a>

                        </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="100">Id Barang</th>
                                            <th>Stock</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                            <!-- <th>Tanggal Keluar</th> -->
                                            <th>Kadaluarsa</th>
                                            <th width="100">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        $sql="SELECT * FROM mou_pemakaian";
                                        $query=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($query))
                                        {
                                            $link_hapus= "persediaan_delete.php?id=$row[id]";
                                            $link_edit = "index.php?menu=persediaan&aksi=ubah&id=$row[id]&idpakai=$row[idpakai]";

                                            $kadaluarsa = $row['kadaluarsa'];
                                            if($kadaluarsa == '0000-00-00' || $kadaluarsa == ''){
                                                $kadaluarsa = "Tidak ada";
                                            }
                                        ?>
                                        <tr>
                                            <td><?=$row['id'];?></td>
                                            <td><?=$row['stock'];?></td>
                                            <td><?=$row['status'];?></td>
                                            <td><?=$row['tanggal'];?></td>
                                            <!-- <td><?=$row['tanggalkeluar'];?></td> -->
                                            <td><?=$kadaluarsa;?></td>

                                            <td>
                                                <a href="<?=$link_edit;?>" class="btn btn-custom">
                                                <i class="fas fa-edit"></i> Edit
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