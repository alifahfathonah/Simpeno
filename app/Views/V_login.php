<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('login/fonts/icomoon/style.css') ?>">

    <link rel="stylesheet" href="<?= base_url('login/css/owl.carousel.min.css') ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('login/css/bootstrap.min.css') ?>">

    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('login/css/style.css') ?>">

    <title>Login Admin</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="<?= base_url('login/images/login.png') ?>" alt="Image" class="img-fluid">
                </div>
                <br>
                <hr>
                <br>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3><strong>LOGIN Admin</strong></h3>
                                <p class="mb-4">sign in to start your session</p>
                            </div>
                            <?php
                            session()->getFlashdata('errors');
                            if (session()->getFlashdata('pesan')) {
                                echo '  <div class="alert alert-danger alert-dismissible" id="flash_data">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h6><i class="icon fas fa-exclamation-circle"></i>';
                                echo session()->getFlashdata('pesan');
                                echo '</h6></div>';
                            }  ?>
                            <form action="<?php echo base_url('cek_login') ?>" method="post">
                                <div class="form-group first">
                                    <label for="username">Email</label>
                                    <input type="Email" name="email" class="form-control" id="username" required>

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">

                                </div>



                                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary"><br>
                                <center><span class="ml-auto"><a href="#" class="forgot-pass ">Design by Mid</a></span></center>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="<?= base_url('login/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('login/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('login/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('login/js/main.js') ?>"></script>
</body>

</html>