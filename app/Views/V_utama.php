<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>NOTARIS & PPAT</title>
    <meta name="keywords" content="Sistem Informasi Pendaftaran Vaksinasi Covid-19">
    <meta name="description" content="RSUD PAKUHAJI">
    <meta name="author" content="Dika Indra">
    <!--Site Icons-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style1.css') ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="<?= base_url('assets/img/logo.png') ?>" width="45" height="40" alt="" />
                </a>
                <h1>NOTARIS & PPAT</h1>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('V_login') ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start slides 
<div id="slides" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/gbr2.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="assets/img/gbr3.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="assets/img/gbr4.jpg" class="d-block w-100" alt="">
        </div>
        <div class="slides-navigation">
            <a href="#" class="next" data-bs-target="#slides" data-bs-slide="prev"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev" data-bs-target="#slides" data-bs-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
 End slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="assets/img/gbr2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="assets/img/gbr3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="assets/img/gbr4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <h1 style="text-align: center;">Berkas Pendukung Pembuatan sertifikat Tanah</h1>
                        <p style="text-align: left; font-weight:800;">1. Fotokopi Kartu Tanda Penduduk (KTP) dan Kartu Keluarga (KK) pemohon.<br>
                            2. Fotokopi Nomor Pokok Wajib Pajak (NPWP). <br>
                            3. Surat Pelunasan Pemberitahuan Pajak Terhutang Pajak Bumi dan Bangunan Tahunan (SPPT PBB). <br>
                            4. Sertifikat Hak Guna Bangunan (SHGB). <br>
                            5. Fotokopi Izin Mendirikan Bangunan (IMB). <br>
                            6. Bukti Akta Jual Beli (AJB), apabila tanah diperoleh dari jual beli. <br>
                            7. Surat pernyataan kepemilikan lahan. <br>
                            8. Fotokopi girik atau letter C yang dimiliki. <br>
                            9. Surat riwayat tanah <br>
                            10. Surat pernyataan tidak sengketa.<br>
                        </p>

                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>Berkas Pendukung Pembuatan Akta Hibah</h1>
                        <p style="text-align: left;font-weight:800;">1. KTP (Kartu Tanda Penduduk) pemberi hibah baik suami dan istri<br>
                            2. KTP dari seluruh ahli waris calon pemberi hibah <br>
                            3. Surat nikah pemberi hibah <br>
                            4. Kartu keluarga pemberi hibah <br>
                            5. Sertifikat asli tanah atau rumah, tentunya untuk pengecekan <br>
                            6. NPWP (Nomor Pokok Wajib Pajak), bila dibutuhkan <br>
                            7. SPPT (Surat Pemberitahuan Pajak Terutang) dan STTS PBB (Surat Tanda <br>
                            Terima Sementara Pajak Bumi dan Bangunan)<br>
                            8. Syarat-syarat lainnya seperti surat kuasa menghibahkan<br>
                            9. Surat persetujuan dari calon ahli waris pemberi hibah<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>Berkas Pendukung Pembuatan Balik Nama Sertifikat Tanah</h1>
                        <p style="text-align: left;font-weight:800;">1. Setifikat Hak Atas Tanah <br>
                            2. Akta Jual Beli <br>
                            3. Fotokopi KTP/KK Pemohon dan Kuasanya apabila dikuasai <br>
                            4. Surat Kuasa Permohonan <br>
                            5. Surat Pengantar dari PPAT <br>
                            6. Surat Tugas dari PPAT <br>
                            7. Bukti pengecekan <br>
                            8. sertifikat SPPT Pajak Bumi dan Bangunan <br>
                            9. tahun berjalan SSB BPHTB Lembar 3 dan bukti bayar uang pemasukan <br>
                            10. Bukti Surat Setoran Pajak/PPH <br>
                            11. BPJS Kesehatan aktif.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->



    <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3>Visi dan Misi</h3>
                    <p>Visi</p>
                    <p>Menjadi notaris dan PPAT terbaik dengan memberikan solusi jasa Notaris dan pertanahan di indonesia</p>
                    <p>Misi</p>
                    <p>Dengan dukungan tenaga ahli dan penerapan sistem standart oprasional prosedur, menjamin kualitas, kecepatan, kenyamanan dan kepuasan pelayanan Notaris dan PPAT</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3>Contact information</h3>

                    <p class="lead"><a href="#">Telp. (021) 55962665</a></p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Location</h3>
                    <p class="lead">Ruko mutiara kosambi I, Jl raya prancis, Blok A No. 1, Tangerang Banten</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63479.19657441126!2d106.614666446396!3d-6.069919715522531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a0302af46b093%3A0x97c36abb0b82bb46!2sRuko%20Mutiara%20Kosambi!5e0!3m2!1sen!2sid!4v1659626249277!5m2!1sen!2sid" width="380" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> <a href="/">NOTARIS & PPAT SILVIA ABBAS, S.H, Sp.N</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <a href="#" id="back-to-top" title="Back to top" style="display:none;">&uarr;</a>
    <!-- End Footer -->
    <!-- ALL JS FILES -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= base_url('assets/js/jquery.superslides.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/images-loded.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/isotope.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/baguetteBox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/form-validator.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/contact-form-script.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>