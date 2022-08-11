 <?php echo view('Layouts/Top') ?>
 <!-- Main Sidebar Container -->

 <div class="wrapper">

     <!-- Preloader -->
     <div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__shake" src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo" height="60" width="60">
     </div>

     <!-- Navbar -->
     <nav class="main-header navbar navbar-expand navbar-danger navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
             <li class="nav-item">
                 <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
             </li>

         </ul>

         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">

             <!-- Messages Dropdown Menu -->
             <li class="nav-item dropdown">
                 <a class="nav-link text-white" data-toggle="dropdown" href="#">
                     <i class="fas fa-user-circle"></i> <?php if (session()->get('email') == 'admin@gmail.com') {
                                                            echo
                                                            $user[0]['email'];
                                                        } else {
                                                            echo $user[1]['email'];
                                                        }  ?>
                 </a>
                 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <a href="#" class="dropdown-item">
                         <!-- Message Start -->

                         <div class="media">
                             <img src="<?php if (session()->get('status') == 'admin') {
                                            echo base_url('foto/' . $user[0]['image']);
                                        } else {
                                            echo base_url('foto/' . $user[1]['image']);
                                        }  ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                             <div class="media-body">
                                 <h3 class="dropdown-item-title">
                                     <?php if (session()->get('status') == 'admin') {
                                            echo $user[0]['name'];
                                        } else {
                                            echo $user[1]['name'];
                                        }  ?>
                                 </h3>
                                 <p class="text-sm"><?php if (session()->get('status') == 'admin') {
                                                        echo
                                                        $user[0]['status'];
                                                    } else {
                                                        echo $user[1]['status'];
                                                    }  ?></p>
                                 <p class="text-sm text-success"><i class="fas fa-circle mr-1"></i> Active</p>
                             </div>
                         </div>
                         <!-- Message End -->
                     </a>

                     <div class="dropdown-divider"></div>
                     <a href="<?= base_url('logout') ?>" class="dropdown-item dropdown-footer">Logout</a>
                 </div>
             </li>

         </ul>
     </nav>
     <!-- /.navbar -->
     <?php if (session()->get('status') == 'admin') { ?>
         <aside class="main-sidebar sidebar-light-danger elevation-4">
             <!-- Brand Logo -->
             <a href="#" class="brand-link bg-danger">
                 <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo" class="brand-image img-circle elevation-3 border border-warning" style="opacity: .8">
                 <b class="brand-text font-weight ml-2">S I M P E N O</b>
             </a>

             <!-- Sidebar -->
             <div class="sidebar">
                 <!-- Sidebar user panel (optional) -->
                 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                     <div class="image">
                         <img src="<?php if (session()->get('status') == 'admin') {
                                        echo base_url('foto/' . $user[0]['image']);
                                    } else {
                                        echo base_url('foto/' . $user[1]['image']);
                                    }  ?>" class="img-circle elevation-2">
                     </div>
                     <div class="info">
                         <a href="#" class="d-block"><?php if (session()->get('status') == 'admin') {
                                                            echo $user[0]['name'];
                                                        } else {
                                                            echo $user[1]['name'];
                                                        }  ?></a>
                     </div>
                 </div>

                 <!-- SidebarSearch Form -->
                 <div class="form-inline">
                     <div class="input-group" data-widget="sidebar-search">
                         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                         <div class="input-group-append">
                             <button class="btn btn-sidebar">
                                 <i class="fas fa-search fa-fw"></i>
                             </button>
                         </div>
                     </div>
                 </div>

                 <!-- Sidebar Menu -->
                 <nav class="mt-2">
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                         <li class="nav-item">
                             <a href="<?php echo base_url('/Dashboard') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Dashboard') {
                                                                                                echo "active";
                                                                                            } ?>">
                                 <i class="nav-icon fas fa-home"></i>
                                 <p>
                                     Dashboard
                                 </p>
                             </a>

                         </li>
                         <li class="nav-item menu ">
                             <a href="#" class="nav-link mt-2 <?php if (current_url(true)->getSegment('2') == 'Notaris') {
                                                                    echo "active";
                                                                } ?><?php if (current_url(true)->getSegment('2') == 'PPAT') {
                                                                        echo "active";
                                                                    } ?>">
                                 <i class="nav-icon far fa-clipboard"></i>
                                 <p>
                                     Data Berkas
                                     <i class="right fas fa-angle-left"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="<?= base_url('/Notaris') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Notaris') {
                                                                                                echo "active";
                                                                                            } ?><?php if (current_url(true)->getSegment('2') == 'Add_Notaris') {
                                                                                                    echo "active";
                                                                                                } ?>">
                                         <i class="fas fa-circle text-sm text-danger nav-icon"></i>
                                         <p>Data Notaris</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('/PPAT') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'PPAT') {
                                                                                            echo "active";
                                                                                        } ?>">
                                         <i class="fas fa-circle text-sm text-danger nav-icon"></i>
                                         <p>Data PPAT</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item menu ">
                             <a href="#" class="nav-link mt-2 <?php if (current_url(true)->getSegment('3') == 'Notaris') {
                                                                    echo "active";
                                                                } ?><?php if (current_url(true)->getSegment('3') == 'PPAT') {
                                                                        echo "active";
                                                                    } ?>">
                                 <i class="nav-icon fas fa-copy"></i>
                                 <p>
                                     Laporan Data
                                     <i class="right fas fa-angle-left"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="<?= base_url('Report/Notaris') ?>" class="nav-link <?php if (current_url(true)->getSegment('3') == 'Notaris') {
                                                                                                        echo "active";
                                                                                                    } ?>">
                                         <i class="fas fa-circle text-sm text-danger nav-icon"></i>
                                         <p>Data Notaris</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('/Report/PPAT') ?>" class="nav-link <?php if (current_url(true)->getSegment('3') == 'PPAT') {
                                                                                                    echo "active";
                                                                                                } ?>">
                                         <i class="fas fa-circle text-sm text-danger nav-icon"></i>
                                         <p>Data PPAT</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url('/Admin') ?>" class="nav-link mt-2 <?php if (current_url(true)->getSegment('2') == 'Admin') {
                                                                                            echo "active";
                                                                                        } ?>">
                                 <i class="nav-icon far fa-user"></i>
                                 <p>
                                     Data Admin
                                 </p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="<?= base_url('logout') ?>" class="nav-link bg-danger mt-5">
                                 <i class="nav-icon fas fa-sign-out-alt"></i>
                                 <p>
                                     Keluar
                                 </p>
                             </a>
                         </li>

                     </ul>
                 </nav>
         </aside>
     <?php } elseif (session()->get('status') == 'notaris') {  ?>
         <aside class="main-sidebar sidebar-light-danger elevation-4">
             <!-- Brand Logo -->
             <a href="#" class="brand-link bg-danger">
                 <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo" class="brand-image img-circle elevation-3 border border-warning" style="opacity: .8">
                 <b class="brand-text font-weight ml-2">S I M P E N O</b>
             </a>

             <!-- Sidebar -->
             <div class="sidebar">
                 <!-- Sidebar user panel (optional) -->
                 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                     <div class="image">
                         <img src="<?= base_url('foto/' . $user[1]['image']) ?>" class="img-circle elevation-2" alt="User Image">
                     </div>
                     <div class="info">
                         <a href="#" class="d-block"><?= $user[1]['name'] ?></a>
                     </div>
                 </div>

                 <!-- SidebarSearch Form -->
                 <div class="form-inline">
                     <div class="input-group" data-widget="sidebar-search">
                         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                         <div class="input-group-append">
                             <button class="btn btn-sidebar">
                                 <i class="fas fa-search fa-fw"></i>
                             </button>
                         </div>
                     </div>
                 </div>
                 <!-- Sidebar Menu -->
                 <nav class="mt-2">
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                         <li class="nav-item">
                             <a href="<?php echo base_url('/Dashboard') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Dashboard') {
                                                                                                echo "active";
                                                                                            } ?>">
                                 <i class="nav-icon fas fa-home"></i>
                                 <p>
                                     Dashboard
                                 </p>
                             </a>

                         </li>
                         <li class="nav-item menu ">
                             <a href="#" class="nav-link mt-2 <?php if (current_url(true)->getSegment('2') == 'Notaris_') {
                                                                    echo "active";
                                                                } ?><?php if (current_url(true)->getSegment('2') == 'PPAT_') {
                                                                        echo "active";
                                                                    } ?>">
                                 <i class="nav-icon far fa-clipboard"></i>
                                 <p>
                                     Data Berkas
                                     <i class="right fas fa-angle-left"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="<?= base_url('/Notaris_') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'Notaris_') {
                                                                                                echo "active";
                                                                                            } ?>">
                                         <i class="fas fa-circle text-sm text-danger nav-icon"></i>
                                         <p>Data Notaris</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('/PPAT_') ?>" class="nav-link <?php if (current_url(true)->getSegment('2') == 'PPAT_') {
                                                                                                echo "active";
                                                                                            } ?>">
                                         <i class="fas fa-circle text-sm text-danger nav-icon"></i>
                                         <p>Data PPAT</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>

                         <li class="nav-item">
                             <a href="<?= base_url('logout') ?>" class="nav-link bg-danger mt-5">
                                 <i class="nav-icon fas fa-sign-out-alt"></i>
                                 <p>
                                     Keluar
                                 </p>
                             </a>
                         </li>

                     </ul>
                 </nav>
                 <!-- /.sidebar-menu -->
             <?php } ?>
             <!-- /.sidebar -->
         </aside>



         <!-- ./wrapper -->