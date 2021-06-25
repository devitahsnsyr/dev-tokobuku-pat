<?php 
    include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Penjualan Pertanggal</title>
    </head>
    <body>
        <div class="container-fluid" id= "content" >
            <div class="card">
                <div class="card-header">
                <p style="font-size: 20px;"> FILTER PENJUALAN PERTANGGAL</p>
                </div>
                <div class="card-body" >
                <p style="font-weight: bold; margin-left: 10%; margin-top: 2px;">periode :</p>
                <div class="mb-3 col-sm-6" style="width: 200px; margin-left: 21%; margin-top: -8%;">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="date" class="form-control" placeholder="">
                </div>
                <p style="margin-left:45%; margin-top: -49px;">s/d</p>
                <div class="mb-3 col-sm-6" style="width: 200px; margin-left: 48%; margin-top:-7.5%">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="date" class="form-control" placeholder="">
                </div>

            <div class="buton" style="margin-left:71.7%; margin-top:-6%  ">
            <a href="#" type="button" class="btn btn-info">Tampilkan</a>
            <a href="#" type="button" class="btn btn-primary">Refresh</a>
            <a href="#" type="button" class="btn btn-success">Cetak</a>
            </div>
            </div>
            <div style="padding:10px;">
                <div class="table-responsive mt-3">
                    <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="tableAll">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Faktur</th>
                                <th>Judul Buku</th>
                                <th>NO ISBN</th>
                                <th>Jumlah Beli</th>
                                <th>Harga Satuan</th>
                                <th>PPN</th>
                                <th>Diskon</th>
                                <th>Total Harga</th>
                                <th>Tanggal Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $no = 1;
                                    $sql = "SELECT * FROM tbl_penjualan INNER JOIN tbl_buku ON tbl_penjualan.id_buku = tbl_buku.id_buku";
                                    $jalan = mysqli_query($con, $sql);
                                    while($r= mysqli_fetch_array($jalan)){
                                ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $r['id_penjualan']?></td>
                                <td><?php echo $r['judul']?></td>
                                <td><?php echo $r['noisbn']?></td>
                                <td><?php echo $r['jumlah_beli']?></td>
                                <td><?php echo $r['harga_jual']?></td>
                                <td><?php echo $r['ppn']?></td>
                                <td><?php echo $r['diskon']?></td>
                                <td><?php echo $r['total_harga']?></td>
                                <td><?php echo $r['tanggal']?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>