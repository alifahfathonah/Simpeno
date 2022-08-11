<?php echo view('Layouts/Front-end') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Ubah Data P.P.A.T</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Ubah Data P.P.A.T</li>
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

                    <form method="post" action="<?php echo base_url('PPAT/EditAction') . '/' . $Update[0]['id_ppat'] ?>" enctype="multipart/form-data">

                        <table class="table table-striped table-middle">
                            <tr>
                                <td width="20%">Nomor Urut</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="no_urut" placeholder="Nomor Urut" value="<?php echo $Update[0]['no_urut'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Akta</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="no_akta" placeholder="Nomor Akta" value="<?php echo $Update[0]['no_akta'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Tanggal Akta</td>
                                <td width="1%">:</td>
                                <td><input type="date" class="form-control" name="tgl_akta" value="<?php echo $Update[0]['tgl_akta'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Bentuk Perbuatan Hukum</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="bentuk_perbuatan" placeholder="Bentuk Perbuatan Hukum" value="<?php echo $Update[0]['bentuk_perbuatan'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Pihak yang mengalihkan/ memberikan</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="pihak_pemberi" placeholder="Pihak yang mengalihkan/ memberikan" value="<?php echo $Update[0]['pihak_pemberi'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Alamat Pemberi</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="alamat_pemberi" placeholder="Alamat Pemberi" value="<?php echo $Update[0]['alamat_pemberi'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Pihak yang menerima</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="pihak_penerima" placeholder="Pihak yang menerima" value="<?php echo $Update[0]['pihak_penerima'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Alamat Penerima</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="alamat_penerima" placeholder="Alamat Penerima" value="<?php echo $Update[0]['alamat_penerima'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Jenis Dan Nomor Hak</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="jenis_no_hak" placeholder="Jenis Dan Nomor Hak" value="<?php echo $Update[0]['jenis_no_hak'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Letak Tanah Dan Bangunan</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="letak_tanah_bangunan" placeholder="Letak Tanah Dan Bangunan" value="<?php echo $Update[0]['letak_tanah_bangunan'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Luas Tanah m²</td>
                                <td width="1%"></td>
                                <td><input type="text" class="form-control" name="luas_tanah" placeholder="Luas Tanah m²" value="<?php echo $Update[0]['luas_tanah'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Luas Bangunan m²</td>
                                <td width="1%"></td>
                                <td><input type="text" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan m²" value="<?php echo $Update[0]['luas_bangunan'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="">Harga transaksi perolehan pengalihan Hak (Rp. 000)</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="harga_pengalihan" placeholder="Harga transaksi perolehan pengalihan Hak (Rp. 000)" value="<?php echo $Update[0]['harga_pengalihan'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="">Nama Perusahaan</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="nama_pt" placeholder="Nama Perusahaan" value="<?php echo $Update[0]['nama_pt'] ?>"></td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Penyimpanan</td>
                                <td width="1%">:</td>

                                <td><select class="form-control select2bs4" name="id_penyimpanan" data-placeholder="Pilih Nomor Penyimpanan" style="width: 100%;" required>
                                        <option value="<?php echo $Update[0]['id_penyimpanan'] ?>" selected><?php echo $Update[0]['no_penyimpanan'] ?></option>
                                        <?php foreach ($penyimpanan as $row) : ?>
                                            <option value="<?= $row['id_penyimpanan'] ?>"><?= $row['no_penyimpanan'] ?></option>
                                        <?php endforeach ?>
                                    </select></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-success">
                            <i class="far fa-save"></i> Simpan
                        </button>
                        <a href="/PPAT" class="btn btn-danger">
                            <i class="fa fa-arrow-circle-left"></i> Batal
                        </a>
                    </form>
                </div>
            </div>





        </div>
    </section>
</div>



<?php echo view('Layouts/Bottom') ?>