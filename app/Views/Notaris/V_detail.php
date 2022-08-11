<?php echo view('Layouts/Front-end'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Data Notaris</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Detail Data Notaris</li>
                    </ol>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <hr>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                    <button type="button" class="btn btn-info btn-sm" onclick="javascript:history.back()">
                        <i class="fa fa-arrow-circle-left"></i> Kembali
                    </button>
                    <h1></h1>
                    <table class="table table-striped table-middle">

                        <tr>
                            <td width="20%">Nomor Urut</td>
                            <td width="1%">:</td>
                            <td><?php echo $Detail[0]['nomor_urut']; ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Bulan</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['no_bulan'] . $Detail[0]['nm_bulan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Akta</td>
                            <td>:</td>
                            <td><?php echo ($Detail[0]['tgl_akta'] != '0000-00-00') ? date('d-m-Y', strtotime($Detail[0]['tgl_akta'])) : ''  ?></td>
                        </tr>
                        <tr>
                            <td>Sifat Akta</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['sifat_akta']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Penghadap dan atau yang diwakili / kuasa 1</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['nama_penghadap_1']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Penghadap dan atau yang diwakili / kuasa 2</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['nama_penghadap_2']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Penghadap dan atau yang diwakili / kuasa 3</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['nama_penghadap_3']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Perusahaan</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['nama_pt']; ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Penyimpanan</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['no_penyimpanan']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Input</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['created_at']; ?></td>
                        </tr>


                    </table>

                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
</div>

<!-- /.content-wrapper -->



<?php echo view('Layouts/Bottom'); ?>