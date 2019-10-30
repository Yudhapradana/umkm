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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/bulat.png">
    <title>EKRAF</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url() ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/dropzone.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/basic.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/datatables/datatables.min.css">
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>

    <style>
        body {
          padding-right: 0 !important;
      }
  </style>
  <style type="text/css">

    body{
        background-color: #E8E9EC;
    }

    .dropzone {
        margin-top: 100px;
        border: 2px dashed #0087F7;
    }

</style>

<script type="text/javascript">
    $(document).ready(function(data){

        $('#formchangepass').submit(function(e){
            e.preventDefault();
                // memasukkan data inputan ke variabel
                var passold             = $('#passold').val();
                var passnew             = $('#passnew').val();
                var passnew2            = $('#passnew2').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Ekraf/changePassword",
                    dataType : "JSON",
                    data : {
                        passold:passold,
                        passnew:passnew,
                        passnew2:passnew2,
                    },

                    success: function(data){ 
                        // alert(data.code);
                        if (data.code == 1) {
                            Swal.fire({
                                type: 'error',
                                title: 'Ada Kesalahan',
                                text: 'Password Lama Tidak Sesuai',
                            })
                        }else if (data.code == 2) {
                            Swal.fire({
                                type: 'error',
                                title: 'Ada Kesalahan',
                                text: 'Konfirmasi Password Baru Tidak Cocok',
                            })
                        }else{
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil mengubah password ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#Modal_changepass').modal('hide'); 
                            // method clear form & calendar agenda
                            document.getElementById('formchangepass').reset();

                        }
                    }
                });

                return false;
            });

        $('#formchangeprofile').submit(function(e){
            e.preventDefault();
                // memasukkan data inputan ke variabel
                var username                = $('#username').val();
                var nama                = $('#nama').val();
                var email                = $('#email').val();
                var hp                  = $('#hp').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Ekraf/updateProfile",
                    dataType : "JSON",
                    data : {
                        nama:nama,
                        username:username,
                        email:email,
                        hp:hp,
                    },

                    success: function(data){ 
                        // Swal.fire({
                        //     type: 'success',
                        //     title: 'Berhasil update profile ',
                        //     showConfirmButton: false,
                        //     timer: 1000
                        // })
                        document.getElementById('formchangeprofile').reset();
                        $('#Modal_profile').modal('hide');
                        window.location.reload();
                    }
                });

                return false;
            });
    });
    
</script>
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
                     <img src="<?php echo base_url() ?>assets/images/tulisan.png" width="180" height="60"  style="margin-left: 10px" />
                    <!-- ============================================================
                        == -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                       
                         
                           
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
                            <li class="nav-item">
                                <a class="btn btn-success" href="<?php echo site_url('Login') ?>" >Login</a>
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
          