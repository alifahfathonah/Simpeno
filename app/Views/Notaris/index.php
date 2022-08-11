<?php echo view('Layouts/Front-end') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Report Data Notaris</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Report Data Notaris</li>
                    </ol>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <hr>

        <form action="<?php echo base_url('Report/Notaris/(:any)') . '/' . $first_date . '/' . $end_date  ?> " method="POST" enctype="multipart/form-data">
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

                <div class="col-sm-2">
                    <a href="<?php echo base_url('/Notaris/print') . '/' . $first_date . '/' . $end_date  ?> " target="_blank" class="btn btn-outline btn-danger">
                        <i class="fas fa-print"></i> Cetak
                    </a>

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
                                    <th>Nomor Bulanan</th>
                                    <th>Tanggal Akta</th>
                                    <th>Sifat Akta</th>
                                    <!-- <th>Lahir</th> -->
                                    <th>Nama Penghadap dan atau yang diwakili / kuasa</th>
                                    <th>Nomor Penyimpanan</th>

                                </tr>

                            </thead>

                            <?php foreach ($notaris as $row) : ?>
                                <tr>
                                    <td><?= $row['nomor_urut'] ?></td>
                                    <td><?= $row['no_bulan'] ?></td>
                                    <td><?= ($row['tgl_akta'] != '0000-00-00') ? date('d-m-Y', strtotime($row['tgl_akta'])) : '' ?></td>
                                    <td><?= $row['sifat_akta'] . '<br>' . $row['nama_pt'] ?></td>

                                    <td><?= $row['nama_penghadap_1']  . '<br>QQ. ' . $row['nama_pt'] . '<br>' . $row['nama_penghadap_2'] . '<br>' . $row['nama_penghadap_3'] ?></td>
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