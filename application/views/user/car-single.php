<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Autoroad - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/animate.css">
    
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/aos.css">

    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/flaticon.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/icomoon.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/style.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/slider.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/css/slick-theme.css">
      <style>

    .lazy{
      background-color: #FFFAFA;
      width: 1000px;
      height: 300px;
      margin:auto;
    }
  </style>
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">UM<span>KM</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="<?php echo site_url()?>user/index" class="nav-link">Home</a></li>
	  <li class="nav-item"><a href="<?php echo site_url('user/login') ?>" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php  echo base_url()?>assets/user/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"></p>
          
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-car-details">
   <!-- <div class=malasngoding-slider>
    <div class=isi-slider>
      
    </div>
  </div> -->
  <div class="container-fluid lazy">
      <?php  foreach ($gambar as $key){ ?>
     <img src="<?php  echo base_url()?>assets/uploads/<?php echo $key->galeri ?>" alt="Gambar 1">
    <?php } ?>
    </div>
    <br>
  <?php foreach ($detail as $key) {
 ?>
    <!--   <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="car-details">
      				<div class="img" style="background-image: url(<?php  echo base_url()?>assets/<?php echo $key->gambar ?>);"></div>
      				<div class="text text-center">
      				
      					<h2><?php echo $key->nama_umkm; ?></h2>
      				</div>
      			</div>
      		</div>
      	</div> -->
      	<div class="row">
      		<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	             <!--  	<div class="icon"><span class="flaticon-books"></span></div> -->
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Nama Subsektor
		                	<span><?php echo $key->nama_subsektor; ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
    <!--    <div class="icon"><span class="flaticon-books"></span></div> -->
	              	<div class="text">
		                <h3 class="heading mb-0 pl-4">
		                	Status Pemilik
		                	<span><?php echo $key->status_pemilik; ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	          <!--   <div class="icon"><span class="flaticon-books"></span></div> -->
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Upah
		                	<span><?php echo $key->upah_tenaga_kerja ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	      <!--   <div class="icon"><span class="flaticon-books"></span></div> -->
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Nama Sumberdana
		                	<span><?php echo $key->nama_sumberdana; ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	             <!--    <div class="icon"><span class="flaticon-books"></span></div> -->
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Teknologi
		                	<span><?php echo $key->teknologi; ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          </div>
          <div class="row">
          
             <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	         <!--    <div class="icon"><span class="flaticon-books"></span></div> -->
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Distribusi
		                	<span><?php echo $key->distribusi; ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
    <!--    <div class="icon"><span class="flaticon-books"></span></div> -->
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Permasalahan
		                	<span><?php echo $key->permasalahan; ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
    <!--    <div class="icon"><span class="flaticon-books"></span></div> -->
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Ekspor
		                	<span><?php echo $key->ekspor; ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
                 <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
    <!--    <div class="icon"><span class="flaticon-books"></span></div> -->
                  <div class="text">
                    <h3 class="heading mb-0 pl-3">
                      Peluangan Tantangan
                      <span><?php echo $key->peluang_tantangan; ?></span>
                    </h3>
                  </div>
                </div>
              </div>
            </div>      
          </div>
                 <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
     <!--   <div class="icon"><span class="flaticon-books"></span></div> -->
                  <div class="text">
                    <h3 class="heading mb-0 pl-3">
                      Kelembagaan
                      <span><?php echo $key->kelembagaan; ?></span>
                    </h3>
                  </div>
                </div>
              </div>
            </div>      
          </div>
      	</div>
        <div class="row">
                 <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
    <!--    <div class="icon"><span class="flaticon-books"></span></div> -->
                  <div class="text">
                    <h3 class="heading mb-0 pl-3">
                      Alamat
                      <span><?php echo $key->alamat; ?>-<?php echo $key->kecamatan; ?>-<?php echo $key->nkota; ?>-<?php echo $key->nprov; ?></span>
                    </h3>
                  </div>
                </div>
              </div>
            </div>      
          </div>
          
        </div>
      <?php } ?>
      			</div>
      </div>
    </section>

   
    <section class="ftco-section services-section img" style="background-image: url(<?php  echo base_url()?>assets/user/images/bg_50.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        
            <h2 class="mb-3">Ayo Beli Produk UMKM</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                <h3>Terbukanya lapangan pekerjaan</h3>

              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                <h3>Meningkatkan angka produk domestik bruto</h3>
            
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                <h3>Meningkatkan ekonomi negara</h3>
     
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                <h3>Solusi usaha untuk masyarakat</h3>
          
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="<?php  echo base_url()?>assets/user/js/jquery.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/popper.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/bootstrap.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/jquery.easing.1.3.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/jquery.waypoints.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/jquery.stellar.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/owl.carousel.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/aos.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/jquery.animateNumber.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/bootstrap-datepicker.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/jquery.timepicker.min.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php  echo base_url()?>assets/user/js/google-map.js"></script>
  <script src="<?php  echo base_url()?>assets/user/js/main.js"></script>
  <script src="<?php  echo base_url()?>assets/js/slick.js"></script>
  <script src="<?php  echo base_url()?>assets/js/slick.min.js"></script>
  <script type="text/javascript">
    $('.lazy').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 4,
    slidesToScroll: 1
  });
  </script>
  </body>
</html>