<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>UMKM</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="assets/datatables/datatables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon --><b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text --><span>
                               <!-- dark Logo text -->
                               <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                               <!-- Light Logo text -->    
                               <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                    </div>
                           <!-- ============================================================== -->
                           <!-- End Logo -->
                           <!-- ============================================================== -->
                           <div class="navbar-collapse">
                            <!-- ============================================================== -->
                            <!-- toggle and nav items -->
                            <!-- ============================================================== -->
                            <ul class="navbar-nav mr-auto mt-md-0">
                                <!-- This is  -->
                                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                                <!-- ============================================================== -->
                                <!-- Comment -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- End Comment -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- Messages -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- End Messages -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- Messages -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- End Messages -->
                                <!-- ============================================================== -->
                            </ul>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <ul class="navbar-nav my-lg-0">
                                <!-- ============================================================== -->
                                <!-- Search -->
                                <!-- ============================================================== -->
                        <!-- <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                            </li> -->
                            <!-- ============================================================== -->
                            <!-- Language -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Profile -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/normal.png" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right scale-up">
                                    <ul class="dropdown-user">
                                        <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- User profile -->
                    <div class="user-profile">
                        <!-- User profile image -->
                        <div class="profile-img"> <img src="assets/images/users/normal.png" alt="user" />
                            <!-- this is blinking heartbit-->

                        </div>
                        <!-- User profile text-->
                        <div class="profile-text">
                            <h5>Admin</h5>
                        </div>
                    </div>
                    <!-- End User profile text-->
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="nav-devider"></li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Data UMKM <span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="index.html">List UMKM </a></li>
                                    <li><a href="index2.html">Input Data UMKM</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Data Master</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="<?php echo base_url().'Subsektor'?>">Subsektor</a></li>
                                    <li><a href="<?php echo base_url().'Sumberdana'?>">Sumber Dana</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Form Input Data UMKM</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="card" style="padding: 10px">
                            <form id="forminput">
                                <div class="modal-body">
                                <div class="form-group row col-12">
                                        <div class="col-6">
                                            <label>Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                                        </div>
                                        <div class="col-6">
                                            <label>Subsektor</label>
                                            <select class="form-control" name="subsektor" id="subsektor">
                                                <option class="form-control" selected="" hidden="" disabled="">Pilih Subsektor</option>
                                                <?php foreach ($subsektor as $key) { ?>
                                                    <option value="<?php echo $key->nama_subsektor ?>"><?php echo $key->nama_subsektor ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Provinsi</label>
                                            <select class="form-control slct_provinsi" name="provinsi" id="slct_provinsi" onchange="change_second2($(this).val(),this)">
                                                <option disabled selected hidden>Pilih Provinsi</option>

                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>Kota/Kabupaten</label>
                                            <select class="form-control slct_kota" name="kota" id="slct_kota">
                                                <option disabled selected hidden class="nomor-not">Pilih Kota/Kabupaten</option>
                                                <?php foreach ($kota as $key) { ?>
                                            <option value="<?php echo $key->nama ?>" class="nomor-nor-<?php echo $key->id_provinsi ?>"> <?php  echo $key->nama ?> </option>
                                        <?php }  ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kecamatan" id="kecamatan" placeholder="Masukkan Kecamatan" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat"></textarea>
                                        </div>
                                </div>
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Status Pemilik</label>
                                            <input type="text" name="status" id="status" class="form-control" placeholder="Masukkan status">
                                        </div>
                                        <div class="col-4">
                                            <label>Upah Karyawan (Rp)</label>
                                            <input type="number" name="upah" id="upah" class="form-control" placeholder="Masukkan upah">
                                        </div>
                                        <div class="col-4">
                                            <label>Sumber Dana</label>
                                            <select class="form-control" name="sumberdana" id="sumberdana">
                                                <option class="form-control" selected="" hidden="" disabled="">Pilih Sumberdana</option>
                                                <?php foreach ($sumberdana as $key) { ?>
                                                    <option value="<?php echo $key->nama_sumberdana ?>"><?php echo $key->nama_sumberdana ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Teknologi</label>
                                            <input type="text" name="teknologi" id="teknologi" class="form-control" placeholder="Masukkan teknologi">
                                        </div>
                                        <div class="col-4">
                                            <label>Distribusi</label>
                                            <input type="text" name="distribusi" id="distribusi" class="form-control" placeholder="Masukkan distribusi">
                                        </div>
                                        <div class="col-4">
                                            <label>Ekspor</label>
                                            <input type="text" name="ekspor" id="ekspor" class="form-control" placeholder="Masukkan eskpor">
                                        </div>
                                </div>
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Permasalahan</label>
                                            <input type="text" name="permasalahan" id="permasalahan" class="form-control" placeholder="Masukkan permasalahan">
                                        </div>
                                        <div class="col-4">
                                            <label>Peluang dan Tantangan</label>
                                            <input type="text" name="peluang" id="peluang" class="form-control" placeholder="Masukkan peluang/tantangan">
                                        </div>
                                        <div class="col-4">
                                            <label>Kelembagaan</label>
                                            <input type="text" name="kelembagaan" id="kelembagaan" class="form-control" placeholder="Masukkan kelembagaan">
                                        </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="btn_push" class="btn btn-primary ">Add</button>
                                    <button type="reset" class="btn btn-secondary " data-dismiss="modal">Clear</button>
                                </div>
                            </form>                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer"> © 2019 with love </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="assets/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="assets/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="assets/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <!--Custom JavaScript -->
        <script src="assets/js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!--sparkline JavaScript -->
        <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--morris JavaScript -->
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morrisjs/morris.min.js"></script>
        <!-- Chart JS -->
        <!-- <script src="assets/js/dashboard1.js"></script> -->
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
        <script src="assets/js/sweetalert2@8.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                //input data sumberdana
                $('#forminput').submit(function(e){
                e.preventDefault();
                // memasukkan data inputan ke variabel
                var nama            = $('#nama').val();
                var nama_subsektor  = $('#subsektor').val();
                var provinsi        = $('#slct_provinsi').val();
                var kota            = $('#slct_kota').val();
                var kecamatan       = $('#kecamatan').val();
                var alamat          = $('#alamat').val();
                var status          = $('#status').val();
                var upah            = $('#upah').val();
                var nama_sumberdana = $('#sumberdana').val();
                var teknologi       = $('#teknologi').val();
                var distribusi      = $('#distribusi').val();
                var ekspor          = $('#ekspor').val();
                var permasalahan    = $('#permasalahan').val();
                var peluang         = $('#peluang').val();
                var kelembagaan     = $('#kelembagaan').val();
                // alert(provinsi);
                // exit();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/FormUmkm/newUmkm",
                    dataType : "JSON",
                    data : {
                        nama_umkm:nama,
                        nama_subsektor:nama_subsektor,
                        provinsi:provinsi,
                        kota:kota,
                        kecamatan:kecamatan,
                        alamat:alamat,
                        status_pemilik:status,
                        upah_tenaga_kerja:upah,
                        nama_sumberdana:nama_sumberdana,
                        teknologi:teknologi,
                        distribusi:distribusi,
                        ekspor:ekspor,
                        permasalahan:permasalahan,
                        peluang_tantangan:peluang,
                        kelembagaan:kelembagaan,
                    },

                    success: function(){ 
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil menambahkan data ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        document.getElementById('forminput').reset();
                    }
                });

                return false;
            });

                $.ajax({
                    url: "<?php echo site_url(); ?>/FormUmkm/select_provinsi",
                    success : function(data){
                        $('#forminput').find('#slct_provinsi').html(data);
                    }
                });
                $.ajax({
                    url: "<?php echo site_url(); ?>/FormUmkm/select_kota",
                    success : function(data){
                        $('#forminput').find('#slct_kota').html(data);
                    }
                });
            });

            function change_second2(value,target) {
                let id_provinsi = value;
                // alert(id_provinsi);
                $(target).parents('.row').find('.slct_kota').find('option').not('.nomor-not').hide();
                $(target).parents('.row').find('.slct_kota').val('0');
                $(target).parents('.row').find('.slct_kota').find('.nomor-nor-'+id_provinsi).show();
            }
        </script>
    </body>

    </html>