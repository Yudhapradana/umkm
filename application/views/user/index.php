<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UMKM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/animate.css">
    
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/aos.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/bootstrap.css">

    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/flaticon.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/icomoon.css">
    <link rel="stylesheet" href="<?php  echo base_url()?>assets/user/css/style.css">
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
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        
	          <li class="nav-item"><a href="<?php echo site_url('user/login') ?>" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('<?php  echo base_url()?>assets/user/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	
          </div>
          <div class="col-lg-2 col" ></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex" >
          	
	    		 <!--   	<div class="d-flex">
	    					<div class="form-group mr-2">
	             <label for="" class="label">Pick-up date</label>
	                <input type="text" class="form-control" id="book_pick_date" placeholder="Date"> 
	              </div>
	              <div class="form-group ml-2">
	             <label for="" class="label">Drop-off date</label>
	                <input type="text" class="form-control" id="book_off_date" placeholder="Date"> 
	              </div>
              </div>
              <div class="form-group">
             <label for="" class="label">Pick-up time</label> 
                <input type="text" class="form-control" id="time_pick" placeholder="Time">
              </div> -->
	      
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate mb-5">
						
		        		<div class="row" >
                    <div class="col-lg align-items-end">
                      <?php echo form_open("User/search"); ?>
                    <div class="form-group">
                      <input type="text" name="search" style="width: 900px ; height: 50px" placeholder="  search nama produk / lokasi">
                    </div>
                    </div>
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" value="Search" class="form-control btn btn-primary">
				              </div>
                      <?php echo form_close(); ?>
			              </div>
		        			</div>
		        		</div>
		   
		        </div>
					</div>
	    	</div>
	    </div>
    </section>

   <!--  <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Our Services</span>
            <h2 class="mb-2">Our Services</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-customer-support"></span></div>
	                <h3 class="heading mb-0 pl-3">24/7 Car Support</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-route"></span></div>
	                <h3 class="heading mb-0 pl-3">Lots of location</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-online-booking"></span></div>
	                <h3 class="heading mb-0 pl-3">Reservation</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-rent"></span></div>
	                <h3 class="heading mb-0 pl-3">Rental Cars</h3>
                </div>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
 -->
    <section class="ftco-section " style="margin-top: -150px">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mb-2">Daftar UMKM</h2>
          </div>
        </div>
 <div class="row">
          <?php foreach ($data as $key ) { ?>
    		<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(<?php  echo base_url()?>assets/<?php echo $key->gambar; ?> );">
    					 	<div class="price-wrap d-flex">
    							
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#"><?php echo $key->nama_umkm; ?></a></h2>
    						<span><?php echo $key->kota; ?></span>
    						<p class="d-flex mb-0 d-block"> <a href="<?php echo site_url()?>/user/detail/<?php echo $key->id_umkm ?>" class="btn btn-black btn-outline-black ml-1" style="width: 300px">Details</a></p>
    					</div>
    				</div>
    			</div>
        <?php } ?> 
 

    	
    			<!-- <div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(assets/user/images/car-8.jpg);">
    						<div class="price-wrap d-flex">
    							<span class="rate">$25</span>
    							<p class="from-day">
    								<span>From</span>
    								<span>/Day</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
    						<span>Mercedes</span>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
    					</div>
    				</div>
    			</div> -->
    		</div>
         <div class="row">
        <div class="col">
         
            <?php echo $pagination;?>
        </div>
    </div> 
    	</div>
  
    
    </section>
   
    <section class="ftco-section services-section img" style="background-image: url(<?php  echo base_url()?>assets/user/images/bg_2.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Work flow</span>
            <h2 class="mb-3">How it works</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                <h3>Pick Destination</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                <h3>Select Term</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                <h3>Choose A Car</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                <h3>Enjoy The Ride</h3>
                <p>A small river named Duden flows by their place and supplies it with you</p>
              </div>
            </div>      
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php  echo base_url()?>assets/user/images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php  echo base_url()?>assets/user/images/person_2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php  echo base_url()?>assets/user/images/person_3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php  echo base_url()?>assets/user/images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php  echo base_url()?>assets/user/images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php  echo base_url()?>assets/user/images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section mb-5 pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Choose A Perfect Car</h2>

	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
	            <p><a href="#" class="btn btn-primary">Search Vehicle</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php  echo base_url()?>assets/user/images/image_1.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php  echo base_url()?>assets/user/images/image_2.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php  echo base_url()?>assets/user/images/image_3.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>		

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Autoroad</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

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


  <script src="<?php  echo base_url()?>assets/user/js/main.js"></script>
   
  
  </body>
</html>