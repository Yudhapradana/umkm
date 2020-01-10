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
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/fonts/dropify.woff"></script>
        <script src="<?php echo base_url() ?>assets/fonts/dropify.ttf"></script> -->
        <link href="<?php echo base_url() ?>assets/css/dropify.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/dropify.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/slider.css">
        <link rel="stylesheet" href="<?php  echo base_url()?>assets/css/slick.css">
        <link rel="stylesheet" href="<?php  echo base_url()?>assets/css/slick-theme.css">


        <style>
            body {
              padding-right: 0 !important;

          }

          .lazy{
              background-color: #FFFAFA;
              width: 1000px;
              height: 300px;
              margin:auto;
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

        input[type="checkbox"] {
            -webkit-appearance: checkbox;
            border-radius: 0;
        }


    </style>

    <script type="text/javascript">
        $(document).ready(function(data){
            $('.sidebarnav').find('#dash2').find('.dash').removeClass('active');

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

            $("#dash2").click(function(){
                var myUrl = "<?php echo site_url(); ?>Ekraf/";
                window.location = myUrl;
            });
        });

        var isShow = false;

        function dropshow() {
            if (isShow) {
                $('.mudun').removeClass('show'); 
                isShow = false;
            }else{
                $('.mudun').addClass('show'); 
                isShow = true;
            }
        }

        

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
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon --><b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="<?php echo base_url() ?>assets/images/bulat.png" alt="homepage" width="20" height="20" class="dark-logo" />

                                <img src="<?php echo base_url() ?>assets/images/bulat.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text --><span>
                               <!-- dark Logo text -->
                               <img src="<?php echo base_url() ?>assets/images/tulisan.png" width="180" height="60" alt="homepage" class="dark-logo" />
                               <!-- Light Logo text -->    
                               <img src="<?php echo base_url() ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
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
                            <li class="nav-item dropdown mudun" onclick="dropshow()">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" >
                                    <img src="<?php echo base_url() ?>assets/images/users/default.png" alt="user" class="profile-pic" /></a>
                                    <div class="dropdown-menu dropdown-menu-right scale-up">
                                        <ul class="dropdown-user">
                                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_profile"><i class="fa fa-user"></i> Ubah Profil</a></li>
                                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#Modal_changepass"><i class="fa fa-key"></i> Ubah Password</a></li>
                                            <li><a href="<?php echo base_url().'Login/logout'?>"><i class="fa fa-power-off"></i> Logout</a></li>
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
                            <div class="profile-img"> <img src="<?php echo base_url() ?>assets/images/users/default.png" alt="user" />
                                <!-- this is blinking heartbit-->

                            </div>
                            <!-- User profile text-->
                            <div class="profile-text">
                                <h5><?php   $this->session->nama ?></h5>
                                <h6><?php   $this->session->role ?></h6>
                                <?php $session=$this->session->userdata('logged_in');
                                echo $session['nama'];?><br>
                                <?php echo $session['role'];  ?>
                            </div>
                        </div>
                        <!-- End User profile text-->
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <li id="dash2"> <a class="waves-effect waves-dark dash" aria-expanded="false"><i class="mdi mdi-gauge"></i> <span class="hide-menu">Dashboard</span></a></li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Data Ekraf </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php echo base_url().'Ekraf/listEkraf'?>">List Ekraf </a></li>
                                        <li><a href="<?php echo base_url().'Ekraf/formInput'?>">Input Data Ekraf</a></li>
                                        <li><a href="<?php echo base_url().'Ekraf/teknologi'?>">Teknologi Ekraf</a></li>
                                        <li><a href="<?php echo base_url().'Ekraf/galeri'?>">Galeri Ekraf</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Data Master</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php echo base_url().'Subsektor'?>">Subsektor</a></li>
                                        <li><a href="<?php echo base_url().'Sentra'?>">Sentra</a></li>
                                        <li><a href="<?php echo base_url().'Sumberdana'?>">Sumber Dana</a></li>
                                        <li><a href="<?php echo base_url().'StatusPemilik'?>">Status Pemilik</a></li>
                                        <li><a href="<?php echo base_url().'TeknologiEcommerce'?>">Teknologi Ecommerce</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Data User</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php echo base_url().'Operator'?>">Operator</a></li>
                                        <li><a href="<?php echo base_url().'PemilikEkraf'?>">Pemilik Ekraf</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                </aside>
                <form id="formchangepass">
                    <div class="modal fade" id="Modal_changepass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Ubah Password</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                                </div>
                                <div class="modal-body">               
                                    <div class="container-fluid">   
                                        <div class="row"> 
                                            <!-- form inputan nama kegiatan -->
                                            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <label>Password Lama</label>
                                                    <input type="password" id="passold" class="form-control" placeholder="Masukkan Password Lama" style="width: 100%" required>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <label>Password Baru</label>
                                                    <input type="password" id="passnew" class="form-control" placeholder="Masukkan Password Baru" style="width: 100%" required>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <label>Konfirmasi Password Baru</label>
                                                    <input type="password" id="passnew2" class="form-control" placeholder="Masukkan Password Baru" style="width: 100%" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <!-- inputan button simpan dan Cancel -->
                                                <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                                <button type="submit" id="btn_push" class="btn btn-primary ">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form id="formchangeprofile">
                    <div class="modal fade" id="Modal_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Change Profile</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                                </div>
                                <div class="modal-body">               
                                    <div class="container-fluid">   
                                        <div class="row">        
                                            <!-- form inputan nama kegiatan -->
                                            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <label>Username</label>
                                                    <input type="text" id="username" name="username" value="<?php echo $session['username']; ?>" class="form-control" placeholder="Masukkan Username" style="width: 100%">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <label>Nama</label>
                                                    <input type="text" id="nama" name="nama" value="<?php echo $session['nama']; ?>" class="form-control" placeholder="Masukkan Nama" style="width: 100%" required>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <label>Email</label>
                                                    <input type="email" id="email" name="email" value="<?php echo $session['email']; ?>" class="form-control" placeholder="Masukkan Email" style="width: 100%" required>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <label>No Hp</label>
                                                    <input type="text" id="hp" name="hp" value="<?php echo $session['no_hp']; ?>" class="form-control" placeholder="Masukkan No Hp" style="width: 100%" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <!-- inputan button simpan dan Cancel -->
                                                <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                                <button type="submit" id="btn_save" class="btn btn-primary ">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
