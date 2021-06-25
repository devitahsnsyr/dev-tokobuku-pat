<?php
include "config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasok Buku</title>
</head>
<body>
    <div class="container-fluid" id= "content" >
        <div class="card">
            <div class="card-header">
            <p style="font-size: 20px;">LAPORAN PASOK BUKU</p>
            </div>
        </div>
        <div style="padding:10px;">
            <!-- <form class="d-flex">
                <p style="font-weight: bold; margin-left: 25%; margin-top: 10px;">periode:</p>
                <label for="exampleFormControlInput1" class="form-label" style="width:100px;"></label>
                <input class="form-control me-3" type="date" name="tglawal" aria-label="Search">
                <label class="me-3" style="margin-top: 10px;">Sd</label>
                <input class="form-control me-3" type="date" name="tglakhir" aria-label="Search">
                <button class="btn btn-info me-2" type="submit">Tampilkan</button>
                <a href="?menu=pasok_buku" class="btn btn-primary me-2" type="submit">Refresh</a>
                <button class="btn btn-success" type="submit">cetak</button>
            </form> -->
            <div class="card-body" >
                <p style="font-weight: bold; margin-left: 17%; margin-top: 2px;">periode :</p>
                <div class="mb-3 col-sm-6" style="width: 200px; margin-left: 26%; margin-top:-7%">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="date" class="form-control" placeholder="">
                </div>
                <p style="margin-left:48%; margin-top: -44px;">s/d</p>
                <div class="mb-3 col-sm-6" style="width: 200px; margin-left: 52%; margin-top:-8%">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="date" class="form-control" placeholder="">
                </div>

            <div class="buton" style="margin-left:73.6%; margin-top:-5.5%  ">
            <a href="#" type="button" class="btn btn-info">Tampilkan</a>
            <a href="#" type="button" class="btn btn-primary">Refresh</a>
            <a href="#" type="button" class="btn btn-success">Cetak</a>
            </div>
            <div class="table-responsive mt-3">
                <table align="center" border="1" class="mt-4 table table-stripped table-hover bg-white" id="tableAll">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Distributor</th>
                            <th>Judul Buku</th>
                            <th>NO ISBN</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Jumlah Pasok</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $sql = "SELECT * FROM tbl_pasok INNER JOIN tbl_distributor ON tbl_pasok.id_distributor = tbl_distributor.id_distributor INNER JOIN tbl_buku ON tbl_pasok.id_buku = tbl_buku.id_buku";
                            $jalan = mysqli_query($con, $sql);
                            while($r= mysqli_fetch_array($jalan)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $r['nama_distributor']?></td>
                            <td><?php echo $r['judul']?></td>
                            <td><?php echo $r['noisbn']?></td>
                            <td><?php echo $r['penulis']?></td>
                            <td><?php echo $r['penerbit']?></td>
                            <td><?php echo $r['harga_pokok']?></td>
                            <td><?php echo $r['stok']?></td>
                            <td><?php echo $r['jumlah']?></td>
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