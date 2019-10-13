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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/bulat.png">
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>assets/images/users/default.png" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right scale-up">
                                    <ul class="dropdown-user">
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
                            <li class="nav-devider"></li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Data Ekraf <span class="label label-rouded label-themecolor pull-right">2</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="<?php echo base_url().'Ekraf'?>">List Ekraf </a></li>
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
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Data User</span></a>
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
