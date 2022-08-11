<?php echo view('Layouts/Front-end') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Tambah Data Notaris</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Tambah Data Notaris</li>
                    </ol>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <hr>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">

                <!-- /.card-header -->
                <div class="card-body">

                    <form method="post" action="insertData" enctype="multipart/form-data">

                        <table class="table table-striped table-middle">
                            <tr>
                                <td width="20%">Nomor Urut</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="nomor_urut" placeholder="Nomor Urut" required></td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Bulan</td>
                                <td width="1%">:</td>
                                <td><select class="form-control select2bs4" name="id_no_bulan" data-placeholder="Pilih Nomor Bulan" style="width: 100%;" required>
                                        <option selected disabled></option>
                                        <?php foreach ($bulan as $row) : ?>
                                            <option value="<?= $row['id_no_bulan'] ?>"><?= $row['no_bulan'] . ' (' . $row['nm_bulan'] . ')' ?></option>
                                        <?php endforeach ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td width="20%">Tanggal Akta</td>
                                <td width="1%">:</td>
                                <td><input type="date" class="form-control" name="tgl_akta" required></td>
                            </tr>
                            <tr>
                                <td width="20%">Sifat Akta</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="sifat_akta" placeholder="Sifat Akta" required></td>
                            </tr>
                            <tr>
                                <td width="20%">Nama Penghadap 1</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="nama_penghadap_1" placeholder="Nama Penghadap dan atau yang diwakili / kuasa 1"></td>
                            </tr>
                            <tr>
                                <td width="20%"></td>
                                <td width="1%"></td>
                                <td><input type="text" class="form-control" name="nama_penghadap_2" placeholder="Nama Penghadap dan atau yang diwakili / kuasa 2"></td>
                            </tr>
                            <tr>
                                <td width="20%"></td>
                                <td width="1%"></td>
                                <td><input type="text" class="form-control" name="nama_penghadap_3" placeholder="Nama Penghadap dan atau yang diwakili / kuasa 3"></td>
                            </tr>
                            <tr>
                                <td width="">Nama Perusahaan</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="nama_pt" placeholder="Nama Perusahaan PT. / CV."></td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Penyimpanan</td>
                                <td width="1%">:</td>

                                <td><select class="form-control select2bs4" name="id_penyimpanan" data-placeholder="Pilih Nomor Penyimpanan" style="width: 100%;" required>
                                        <option selected disabled></option>
                                        <?php foreach ($penyimpanan as $row) : ?>
                                            <option value="<?= $row['id_penyimpanan'] ?>"><?= $row['no_penyimpanan'] ?></option>
                                        <?php endforeach ?>
                                    </select></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-success">
                            <i class="far fa-save"></i> Simpan
                        </button>
                        <a href="/Notaris" class="btn btn-danger">
                            <i class="fa fa-arrow-circle-left"></i> Batal
                        </a>
                    </form>
                </div>
            </div>





        </div>
    </section>
</div>



<?php echo view('Layouts/Bottom') ?>