<?php echo view('Layouts/Front-end') ?>
<style>
    .file-upload {
        background-color: #ffffff;
        width: 600px;
        padding: 20px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #1FB264;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #15824B;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #1AA059;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #1FB264;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #1FB264;
        border: 4px dashed #ffffff;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #15824B;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Tambah Data Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                        <li class="breadcrumb-item active">Tambah Data Admin</li>
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
                                <td width="20%">Nama</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="name" placeholder="Nama Users"></td>
                            </tr>
                            <tr>
                                <td width="20%">Email</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="email" placeholder="Email Users"></td>
                            </tr>
                            <tr>
                                <td width="20%">password</td>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" name="password" placeholder="Password Users"></td>
                            </tr>
                            <tr>
                                <td width="20%">Status</td>
                                <td width="1%">:</td>

                                <td><select class="form-control select2bs4" name="status" data-placeholder="Pilih Status Users" style="width: 100%;" required>
                                        <option selected disabled></option>

                                        <option value="Admin">Admin</option>
                                        <option value="Notaris">Notaris</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>:</td>
                                <td>
                                    <div class="file-upload">

                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )" accept="image/*">Add Image</button>

                                        <div class="image-upload-wrap">

                                            <input class="file-upload-input" type="file" name="image" onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>Drag and drop a Image</h3>
                                            </div>
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" width="100px" height="100px" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </table>
                        <button type="submit" class="btn btn-success">
                            <i class="far fa-save"></i> Simpan
                        </button>
                        <a href="/Admin" class="btn btn-danger">
                            <i class="fa fa-arrow-circle-left"></i> Batal
                        </a>
                    </form>
                </div>
            </div>





        </div>
    </section>
</div>



<?php echo view('Layouts/Bottom') ?>