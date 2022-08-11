<?php echo view('Layouts/Front-end') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Report Data P.P.A.T</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Report Data P.P.A.T</li>
                    </ol>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <hr>

        <form action="<?php echo base_url('PPAT_/getPPAT/(:any)') . '/' . $first_date . '/' . $end_date  ?> " method="POST" enctype="multipart/form-data">
            <div class="row ml-2">
                <div class="col-lg-2">
                    <input type="date" name="first_date" class="form-control">
                </div>
                <div class="col-lg-2">
                    <input type="date" name="end_date" class="form-control">
                </div>
                <div class="col-sm-2">

                    <button type="submit" name="show" class="btn btn-info">Tampil</button>

                </div>



            </div>
        </form>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->


            <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-condensed table-hover" id="example1">
                            <thead>
                                <tr class="bg-danger" style="color:white; font-size:10pt;">
                                    <th>Nomor Urut</th>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Bentuk Perbuatan Hukum</th>
                                    <!-- <th>Lahir</th> -->
                                    <th>Pihak yang mengalihkan/ memberikan</th>
                                    <th>Pihak yang menerima</th>
                                    <th>Luas Tanah</th>
                                    <th>Luas Bangunan</th>

                                    <th>Harga transaksi perolehan pengalihan Hak (Rp. 000)</th>
                                    <th>Nomor Penyimpanan</th>

                                </tr>

                            </thead>
                            <tbody>
                                <?php foreach ($Ppat as $row) : ?>
                                    <tr>
                                        <td><?= $row['no_urut'] ?></td>
                                        <td><?= $row['no_akta'] ?></td>
                                        <td><?= ($row['tgl_akta'] != '0000-00-00') ? date('d-m-Y', strtotime($row['tgl_akta'])) : '' ?></td>
                                        <td><?= $row['bentuk_perbuatan'] ?></td>
                                        <td><?= $row['pihak_pemberi'] . '<br>' . 'QQ. ' . $row['nama_pt'] . '<br>' . $row['alamat_pemberi'] ?></td>

                                        <td><?= $row['pihak_penerima'] . '<br>'  . $row['alamat_penerima'] ?></td>
                                        <td><?= $row['luas_tanah'] . 'm²' ?></td>
                                        <td><?= $row['luas_bangunan'] . 'm²' ?></td>
                                        <td><?= $row['harga_pengalihan'] ?></td>
                                        <td><?= $row['no_penyimpanan'] ?></td>

                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>
<?php echo view('Layouts/Bottom') ?>