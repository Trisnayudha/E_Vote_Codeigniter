<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi E Voting</title>
    <link rel="icon" href="<?= base_url('assets/') ?>dist/img/voting.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Alert -->
    <script src="<?= base_url('assets/') ?>alert.js"></script>
    <!-- Auto Refresh -->

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-blue navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">
                        <b>Sistem Informasi Pemungutan Suara Berbasis Online</b>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-navy">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="<?= base_url('assets/') ?>dist/img/voting.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-light"> E - VOTING STTB</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/') ?>dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class=" d-block">
                            <?= $this->fungsi->user_login()->nama_pengguna ?>
                        </a>
                        <span class="badge badge-success">
                            <?= $this->fungsi->user_login()->level ?>
                        </span>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <?php if ($this->session->userdata('level') == 'Administrator') {
                        ?>
                            <!-- Level  -->
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-desktop"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        Kelola Data
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('kandidat') ?>" class="nav-link">
                                            <i class="nav-icon far fa-circle text-success"></i>
                                            <p>Data Kandidat</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('pemilih') ?>" class="nav-link">
                                            <i class="nav-icon far fa-circle text-success"></i>
                                            <p>Data Pemilih</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('bilik') ?>" class="nav-link">
                                    <i class="nav-icon far fa fa-edit"></i>
                                    <p>
                                        Bilik Suara
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('kotaksuara') ?>" class="nav-link">
                                    <i class="nav-icon far fa fa-table"></i>
                                    <p>
                                        Kotak Suara
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('quickcount') ?>" class="nav-link">
                                    <i class="nav-icon far fa fa-chart-pie"></i>
                                    <p>
                                        Quick Count
                                        <span class="badge badge-warning">
                                            QC
                                        </span>
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Laporan
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon far fa-circle text-info"></i>
                                            <p>Daftar Kandidat</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon far fa-circle text-info"></i>
                                            <p>Daftar pemilih</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon far fa-circle text-info"></i>
                                            <p>Perolehan Suara</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-header">Setting</li>
                            <li class="nav-item">
                                <a href="<?= base_url('user') ?>" class="nav-link">
                                    <i class="nav-icon far fa-user"></i>
                                    <p>
                                        Users
                                    </p>
                                </a>
                            </li>

                        <?php
                        }
                        ?>
                        <?php if ($this->session->userdata('level') == 'Petugas') {
                        ?>
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('kotaksuara') ?>" class="nav-link">
                                    <i class="nav-icon far fa fa-table"></i>
                                    <p>
                                        Kotak Suara
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('quickcount') ?>" class="nav-link">
                                    <i class="nav-icon far fa fa-chart-pie"></i>
                                    <p>
                                        Quick Count
                                        <span class="badge badge-warning">
                                            QC
                                        </span>
                                    </p>
                                </a>
                            </li>


                            <!-- <li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Laporan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-info"></i>
										<p>Daftar Kandidat</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-info"></i>
										<p>Daftar pemilih</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-info"></i>
										<p>Perolehan Suara</p>
									</a>
								</li>
							</ul> -->
                            </li>
                            <li class="nav-header">Setting</li>
                        <?php
                        }
                        ?>
                        <?php if ($this->session->userdata('level') == 'Pemilih') {
                        ?>
                            <li class="nav-item">
                                <a href="<?= base_url('bilik') ?>" class="nav-link">
                                    <i class="nav-icon far fa fa-edit"></i>
                                    <p>
                                        Bilik Suara
                                    </p>
                                </a>
                            </li>

                            <li class="nav-header">Setting</li>
                        <?php
                        }
                        ?>

                        <li class="nav-item">
                            <a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="<?= base_url('auth/logout') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <!-- Dashboard page -->
        <div class="content-wrapper">
            <?= $contents ?>

        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                Copyright &copy; KPU Sekolah Tinggi Teknologi Bandung 2020
                <a target="_blank" href="">
                    <strong> </strong>
                </a>
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/') ?>jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/') ?>select2/js/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/') ?>datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets/') ?>datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
    <!-- page script -->
    <script src="<?= base_url('assets/') ?>jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/') ?>jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?= base_url('assets/') ?>jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?= base_url('assets/') ?>jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/') ?>jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/') ?>jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/') ?>jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>

</body>

</html>