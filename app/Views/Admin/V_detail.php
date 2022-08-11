<?php echo view('Layouts/Front-end'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Data Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Detail Data Admin</li>
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
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><?php echo  $Detail[0]['password']; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php echo $Detail[0]['status']; ?></td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>:</td>
                            <td><a href="<?= base_url('foto/' . $Detail[0]['image']) ?>" class="preview" target="_blink"><img class="img-thumbnail" width="100px" height="100px" src="<?= base_url('foto/' . $Detail[0]['image']) ?>"></a></td>
                            </td>
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