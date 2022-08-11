<?php echo view('Layouts/Front-end'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Data P.P.A.T</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Detail Data P.P.A.T</li>
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
                            <td><?php echo $Detail[0]['no_urut']; ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Akta</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['no_akta'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Akta</td>
                            <td>:</td>
                            <td><?php echo ($Detail[0]['tgl_akta'] != '0000-00-00') ? date('d-m-Y', strtotime($Detail[0]['tgl_akta'])) : ''  ?></td>
                        </tr>
                        <tr>
                            <td>Bentuk Perbuatan Hukum</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['bentuk_perbuatan']; ?></td>
                        </tr>
                        <tr>
                            <td>Pihak yang mengalihkan/ memberikan</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['pihak_pemberi']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Pemberi</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['alamat_pemberi']; ?></td>
                        </tr>
                        <tr>
                            <td>Pihak yang menerima</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['pihak_penerima']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Penerima</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['alamat_penerima']; ?></td>
                        </tr>
                        <tr>
                            <td>Luas Tanah m²</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['luas_tanah'] . 'm²' ?></td>
                        </tr>
                        <tr>
                            <td>Luas Bangunan m²</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['luas_bangunan'] . 'm²' ?></td>
                        </tr>
                        <tr>
                            <td>Harga transaksi perolehan pengalihan Hak (Rp. 000)</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['harga_pengalihan']; ?></td>
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