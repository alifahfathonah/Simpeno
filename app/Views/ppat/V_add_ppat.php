<?php echo view('Layouts/Front-end') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Tambah Data P.P.A.T</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Tambah Data P.P.A.T</li>
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
                                <td><input type="text" class="form-control" name="no_urut" placeholder="Nomor Urut" required></td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Akta</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="no_akta" placeholder="Nomor Akta" required></td>
                            </tr>

                            <tr>
                                <td width="20%">Tanggal Akta</td>
                                <td width="1%">:</td>
                                <td><input type="date" class="form-control" name="tgl_akta" required></td>
                            </tr>
                            <tr>
                                <td width="20%">Bentuk Perbuatan Hukum</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="bentuk_perbuatan" placeholder="Bentuk Perbuatan Hukum" required></td>
                            </tr>
                            <tr>
                                <td width="20%">Pihak yang mengalihkan / memberikan</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="pihak_pemberi" placeholder="Pihak yang mengalihkan / member" required></td>
                            </tr>
                            <tr>
                                <td width="20%">Pihak yang menerima</td>
                                <td width="1%"></td>
                                <td><input type="text" class="form-control" name="pihak_penerima" placeholder="Pihak yang menerima" required></td>
                            </tr>
                            <tr>
                                <td width="20%">Jenis Nomor Hak</td>
                                <td width="1%"></td>
                                <td><input type="text" class="form-control" name="jenis_no_hak" placeholder="Jenis nomor Hak" required></td>
                            </tr>
                            <tr>
                                <td width="">Letak Tanah Dan Bangunan</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="letak_tanah_bangunan" placeholder="Letak tanah dan bangunan" required></td>
                            </tr>
                            <tr>
                                <td width="">Luas Tanah M2</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="luas_tanah" placeholder="Luas Tanah" required></td>
                            </tr>
                            <tr>
                                <td width="">Luas Bangunan M2</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan" required></td>
                            </tr>
                            <tr>
                                <td width="">Harga Transaksi Perolehan Pengalihan Hak (Rp.000)</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="harga_pengalihan" placeholder="Harga Transaksi Perolehan Pengalihan Hak (Rp.000)"></td>
                            </tr>
                            <tr>
                                <td width="">Nama Perusahaan</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="nama_pt" placeholder="Nama Perusahaan"></td>
                            </tr>
                            <tr>
                                <td width="">Alamat Pemberi</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="alamat_pemberi" placeholder="Alamat Pemberi" required></td>
                            </tr>
                            <tr>
                                <td width="">Alamat Penerima</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="alamat_penerima" placeholder="Alamat Penerima" required></td>
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