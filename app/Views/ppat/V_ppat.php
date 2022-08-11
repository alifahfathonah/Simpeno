<?php echo view('Layouts/Front-end') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data PPAT</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Data PPAT</li>
                    </ol>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <hr>




        <div class="col-sm-3">
            <a href="PPAT/Add_Ppat" class="btn btn-outline btn-danger">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
        </div>


    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <?php
            session()->getFlashdata('pesan');
            if (session()->getFlashdata('pesan')) {
                echo '  <div class="alert alert-success alert-dismissible" id="flash_data">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h6><i class="icon fas fa-exclamation-circle"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h6></div>';
            } ?>
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
                                    <th>Aksi</th>
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
                                        <td>

                                            <div class="nav-item dropdown">
                                                <a class="nav-link" data-toggle="dropdown" href="#">
                                                    <i style="color: #800000;" class="far fa-caret-square-down"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <form action="<?php echo base_url('PPAT/getDetail') . '/' . $row['id_ppat'] ?>" method="post">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="Details">
                                                        <button type="submit" class="dropdown-item"><i class="nav-icon fas fa-eye"></i>
                                                            Lihat
                                                        </button>
                                                    </form>
                                                    <div class="dropdown-divider"></div>
                                                    <form action="<?php echo base_url('PPAT/getUpdate') . '/' . $row['id_ppat'] ?>" method="post">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="Edit">
                                                        <button type="submit" class="dropdown-item"><i class="nav-icon fas fa-edit"></i>
                                                            Ubah
                                                        </button>
                                                    </form>
                                                    <div class="dropdown-divider"></div>
                                                    <form action="<?php echo base_url('PPAT/deleteData') . '/' . $row['id_ppat'] ?>" method="post">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="Delete">
                                                        <button type="submit" class="dropdown-item" onclick="return confirm('Apakah anda yakin?');"><i class="nav-icon fas fa-trash-alt"></i>
                                                            Hapus
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </td>
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