@extends('layouts.app')
@section('content')
<div id="page" class="page">




			<x-header/>


			<div class="inner-page-wrapper">

				<section id="about-page" class="bg-fixed wide-100 page-hero-section division">
					<div class="container">	


						<!-- PAGE HERO TEXT -->
						<div class="row">	
							<div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
								<div class="hero-txt text-center white-color">

									<!-- Title -->
									<h2 class="h2-lg">About Spa Magic</h2>

									<!-- Text -->
									<p class="p-lg">Sapien gravida donec pretium ipsum porta justo integer at feugiat velna vitae auctor 
									   an integera magna purus
									</p>

								</div>
							</div>	
						</div>    <!-- END PAGE HERO TEXT -->


						<!-- BREADCRUMB -->
						<div id="breadcrumb">
							<div class="row">						
								<div class="col">
									<div class="breadcrumb-nav">
										<nav aria-label="breadcrumb">
										  	<ol class="breadcrumb">
										    	<li class="breadcrumb-item"><a href="/">Home</a></li>
										    	<li class="breadcrumb-item active" aria-current="page">About Us</li>
										  	</ol>
										</nav>
									</div>
								</div>
							</div> 
						</div>	<!-- END BREADCRUMB -->


					</div>	   <!-- End container --> 
				</section>	<!-- END PAGE HERO -->




				<!-- ABOUT-1
				============================================= -->
				<section id="about-1" class="bg-color-01 wide-60 about-section division">
					<div class="container">
						<div class="row d-flex align-items-center">


							<!-- IMAGE BLOCK -->
							<div class="col-md-5 col-lg-6">
								<div class="img-block left-column pc-10 mb-40">
									<img class="img-fluid" src="images/image-01.png" alt="about-image">
								</div>
							</div>


							<!-- TEXT BLOCK -->	
							<div class="col-md-7 col-lg-6">
								<div class="txt-block right-column pc-15 mb-40">

									<!-- Title -->	
									<h3 class="h3-md txt-color-01">Your Beauty and Success Starts Here</h3>

									<!-- Text -->
									<p class="txt-color-05">Porta semper lacus cursus, feugiat primis ultrice a ligula risus auctor an tempus 
									   feugiat dolor lacinia cubilia curae integer orci congue and metus mollislorem primis in integer metus 
									   mollis faucibus 
									</p>

									<!-- List -->	
									<ul class="txt-list txt-color-05">

										<li class="list-item">
											<i class="fas fa-genderless"></i>
											<p>Fringilla risus nec, luctus mauris  orci auctor purus euismod at pretium purus
						   					   pretium ligula rutrum tempor sapien
											</p>
										</li>

										<li class="list-item">
											<i class="fas fa-genderless"></i>
											<p>Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien
						   					   undo pretium purus
											</p>
										</li>

									</ul>

								</div>
							</div>	<!-- END TEXT BLOCK -->	


						</div>	   <!-- End row -->
					</div>	   <!-- End container -->
				</section>	<!-- END ABOUT-1 -->




				<!-- SERVICES-1
				============================================= -->
				<section id="services-1" class="bg-color-02 wide-60 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-lg-10 offset-lg-1">
								<div class="section-title mb-60 text-center">	

									<!-- Transparent Header -->	
									<h2 class="tra-header txt-color-02">Be Natural</h2>	

									<!-- Title 	-->	
									<h3 class="h3-xl txt-color-01">Feel Natural, Be Natural</h3>	

									<!-- Text -->	
									<p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
									   primis libero tempus, blandit a cursus varius at magna tempor
									</p>
										
								</div>	
							</div>
						</div>


						<!-- SERVICES-1 WRAPPER -->
				 		<div class="sbox-1-wrapper">
							<div class="row">


								<!-- SERVICE BOX #1 -->
								<div class="col-md-4">
									<div class="sbox-1">
										
										<!-- Image -->
										<img class="img-fluid" src="images/serv-01.png" alt="service-image" />	
											
										<!-- Title -->
										<h5 class="h5-md txt-color-01">Aromatherapy</h5>

										<!-- Text -->
										<p class="txt-color-05">Porta semper lacus cursus feugiat primis ultrice in ligula risus auctor tempus 
										   dolor feugiat lacinia ultrice in ligula
										</p>

									</div>							
								</div>


								<!-- SERVICE BOX #2 -->
								<div class="col-md-4">
									<div class="sbox-1">
										
										<!-- Image -->
										<img class="img-fluid" src="images/serv-02.png" alt="service-image" />	
											
										<!-- Title -->
										<h5 class="h5-md txt-color-01">Relax</h5>

										<!-- Text -->
										<p class="txt-color-05">Porta semper lacus cursus feugiat primis ultrice in ligula risus auctor tempus dolor 
										   feugiat lacinia ultrice in ligula
										</p>							
									
									</div>							
								</div>


								<!-- SERVICE BOX #3 -->
								<div class="col-md-4">
									<div class="sbox-1">
										
										<!-- Image -->
										<img class="img-fluid" src="images/serv-03.png" alt="service-image" />	
											
										<!-- Title -->
										<h5 class="h5-md txt-color-01">Massage</h5>

										<!-- Text -->
										<p class="txt-color-05">Porta semper lacus cursus feugiat primis ultrice in ligula risus auctor tempus dolor 
										   feugiat lacinia ultrice in ligula
										</p>

									</div>							
								</div>	


							</div>  <!-- End row -->	
					 	</div>	<!-- END SERVICES-1 WRAPPER -->


					</div>	   <!-- End container -->
				</section>	<!-- END SERVICES-1 -->




				<!-- ABOUT-3
				============================================= -->
				<section id="about-3" class="bg-color-01 wide-60 about-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-lg-10 offset-lg-1">
								<div class="section-title mb-60 text-center">	

									<!-- Transparent Header -->	
									<h2 class="tra-header txt-color-02">Experience</h2>	

									<!-- Title 	-->	
									<h3 class="h3-xl txt-color-01">Body And Soul Together</h3>

									<!-- Text -->	
									<p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
									   primis libero tempus, blandit a cursus varius at magna tempor
									</p>
										
								</div>	
							</div>
						</div>


						<!-- ABOUT IMAGE -->
						<div class="row">	
						 	<div class="col-md-12">
								<div class="img-block">
									<img class="img-fluid" src="images/image-12.jpg" alt="about-image">
								</div>
							</div>
						</div>


						<!-- ABOUT BOXES WRAPPER -->
			 			<div class="abox-1-wrapper">
							<div class="row d-flex align-items-center">


								<!-- ABOUT BOX #1 -->		
								<div class="col-md-4">
									<div class="abox-1 mb-40">

										<!-- Icon --> 
										<div class="abox-1-ico ico-75 txt-color-03">
											<span class="flaticon-relax-stones"></span>
										</div>

										<!-- Text -->
										<div class="abox-1-txt">
											<h5 class="h5-xs txt-color-01">Safety Standards</h5>
											<p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
										</div>

									</div>
								</div>


								<!-- ABOUT BOX #2 -->		
								<div class="col-md-4">
									<div class="abox-1 mb-40">

										<!-- Icon --> 
										<div class="abox-1-ico ico-75 txt-color-03">
											<span class="flaticon-herbal-2"></span>
										</div>

										<!-- Text -->
										<div class="abox-1-txt">
											<h5 class="h5-xs txt-color-01">Lifestyle Program</h5>
											<p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
										</div>

									</div>
								</div>


								<!-- ABOUT BOX #3 -->		
								<div class="col-md-4">
									<div class="abox-1 mb-40">

										<!-- Icon --> 
										<div class="abox-1-ico ico-75 txt-color-03">
											<span class="flaticon-gift"></span>
										</div>

										<!-- Text -->
										<div class="abox-1-txt">
											<h5 class="h5-xs txt-color-01">Gift Cards</h5>
											<p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
										</div>

									</div>
								</div>


							</div>  <!-- End row --> 
						</div>	  <!-- END ABOUT BOXES WRAPPER -->


					</div>	   <!-- End container -->
				</section>	<!-- END ABOUT-3 -->




				<!-- VIDEO-1
				============================================= -->
				<div id="video-1" class="bg-fixed video-section division">
					<div class="container white-color">
						<div class="row">


							<!-- VIDEO LINK -->	
				 			<div class="col-md-8 offset-md-2">
				 				<div class="video-1-preview">					
									<a class="video-popup2" href="https://www.youtube.com/embed/7e90gBu4pas">  <!-- Change the link HERE!!! -->	

										<!-- Play Icon --> 							
										<div class="video-btn bg-color-09">	
											<div class="video-block-wrapper"><i class="fas fa-play"></i></div>
										</div>

									</a>
						 		</div>
				 			</div>	<!-- END VIDEO LINK -->	

						
						</div>    <!-- End row -->	
					</div>	   <!-- End container -->						
				</div>	<!-- END VIDEO-1 -->




				<!-- SERVICES-10
				============================================= -->
				<section id="services-10" class="bg-color-01 wide-60 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-lg-10 offset-lg-1">
								<div class="section-title mb-60 text-center">	

									<!-- Transparent Header -->	
									<h2 class="tra-header txt-color-02">Welcome To</h2>	

									<!-- Title 	-->	
									<h3 class="h3-xl txt-color-01">Massage Therapy Center</h3>		

									<!-- Text -->	
									<p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
									   primis libero tempus, blandit a cursus varius at magna tempor
									</p>
										
								</div>	
							</div>
						</div>


						<!-- SERVICES-10 WRAPPER -->
				 		<div class="sbox-10-wrapper">
							<div class="row">


								<!-- SERVICE BOX #1 -->
								<div class="col-md-6 col-lg-3">
									<div class="sbox-10 bg-white text-center">
										
										<!-- Image -->
										<div class="sbox-10-img">
											<div class="hover-overlay"> 
												<img class="img-fluid" src="images/serv-13.jpg" alt="service-image" />	
											</div>
										</div>

										<!-- Text -->
										<div class="sbox-10-txt">

											<!-- Title -->
											<h5 class="h5-sm txt-color-01">Combination Massage</h5>

											<!-- Text -->	
											<p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque dolor</p>	

											<!-- Button -->
											<a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out More</a> 

										</div>

									</div>							
								</div>


								<!-- SERVICE BOX #2 -->
								<div class="col-md-6 col-lg-3">
									<div class="sbox-10 bg-white text-center">
										
										<!-- Image -->
										<div class="sbox-10-img">
											<div class="hover-overlay"> 
												<img class="img-fluid" src="images/serv-14.jpg" alt="service-image" />	
											</div>
										</div>

										<!-- Text -->
										<div class="sbox-10-txt">

														
											<!-- Title -->
											<h5 class="h5-sm txt-color-01">Special Care Solutions</h5>

											<!-- Text -->	
											<p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque dolor</p>		

											<!-- Button -->
											<a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out More</a> 		

										</div>						
									
									</div>							
								</div>


								<!-- SERVICE BOX #3 -->
								<div class="col-md-6 col-lg-3">
									<div class="sbox-10 bg-white text-center">
										
										<!-- Image -->
										<div class="sbox-10-img">
											<div class="hover-overlay"> 
												<img class="img-fluid" src="images/serv-15.jpg" alt="service-image" />	
											</div>
										</div>

										<!-- Text -->
										<div class="sbox-10-txt">

											<!-- Title -->
											<h5 class="h5-sm txt-color-01">Relaxing & Body Treatments</h5>

											<!-- Text -->	
											<p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque dolor</p>	

											<!-- Button -->
											<a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out More</a> 	

										</div>

									</div>							
								</div>	


								<!-- SERVICE BOX #4 -->
								<div class="col-md-6 col-lg-3">
									<div class="sbox-10 bg-white text-center">
										
										<!-- Image -->
										<div class="sbox-10-img">
											<div class="hover-overlay"> 
												<img class="img-fluid" src="images/serv-16.jpg" alt="service-image" />	
											</div>
										</div>

										<!-- Text -->
										<div class="sbox-10-txt">

											<!-- Title -->
											<h5 class="h5-sm txt-color-01">Oils & Aromatherapy</h5>

											<!-- Text -->	
											<p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum neque dolor</p>		

											<!-- Button -->
											<a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out More</a> 		

										</div>

									</div>							
								</div>


							</div>  <!-- End row -->	
					 	</div>	<!-- END SERVICES-10 WRAPPER -->


					</div>	   <!-- End container -->
				</section>	<!-- END SERVICES-10 -->




				<!-- PRICING-2
				============================================= -->
				<section id="pricing-2" class="bg-color-01 pricing-section division">
					<div class="container">


						<!-- PRICING TABLES WRAPPER -->
				 		<div class="pricing-wrapper">
							<div class="row d-flex align-items-center">


								<!-- WORKING HOURS -->	
								<div class="col-md-6 col-lg-4">
									<div class="pricing-2-banner bg-color-09 white-color">

										<!-- Title -->
										<h5 class="h5-xl">Open Hours:</h5>

										<!-- Text -->
										<p>An magnis nulla dolor sapien augue porta iaculis a purus tempor magna and vitae purus primis ipsum</p>

										<h6 class="h6-xl">Monday – Friday</h6>
										<span>9:00 AM - 7:00 PM</span>

										<h6 class="h6-xl">Saturday</h6>
										<span>10:00 AM - 6:00 PM</span>

										<h6 class="h6-xl">Sunday</h6>
										<span>Closed</span>

										<!-- Button -->
										<a href="booking.html" class="btn btn-md btn-tra-white white-hover mt-5">Book Now</a>

									</div>	
								</div>


								<!-- IMAGE BLOCK -->	
					 			<div id="pb-img" class="col-lg-4">
					 				<div class="pricing-2-img text-center">
					 					<img class="img-fluid" src="images/image-05.jpg" alt="pricing-image" />	
					 				</div>
					 			</div>


								<!-- SERVICE BOX #3 -->		
								<div class="col-md-6 col-lg-4">
									<div class="pricing-2-table bg-color-02">
										<ul class="pricing-list">

											<li class="pricing-list-txt">
												<h6 class="h6-lg txt-color-01">Swedish Massage</h6>
												<p class="txt-color-05">50 Minute Session Packages</p>
												<h6 class="h6-lg pricing-list-amount txt-color-01">$60</h6>
											</li>

											<li class="pricing-list-txt">
												<h6 class="h6-lg txt-color-01">Combination Massage</h6>
												<p class="txt-color-05">60 Minute Session Packages</p>
												<h6 class="h6-lg pricing-list-amount txt-color-01">$65</h6>
											</li>

											<li class="pricing-list-txt">
												<h6 class="h6-lgs txt-color-01">Deep Tissue Massage</h6>
												<p class="txt-color-05">45 Minute Session Packages</p>
												<h6 class="h6-lg pricing-list-amount txt-color-01">$65</h6>
											</li>

											<li class="pricing-list-txt">
												<h6 class="h6-lg txt-color-01">Hot Stone Massage</h6>
												<p class="txt-color-05">55 Minute Session Packages</p>
												<h6 class="h6-lg pricing-list-amount txt-color-01">$84</h6>
											</li>

											<li class="pricing-list-txt resp-lst">
												<h6 class="h6-lg txt-color-01">Relaxing Massage</h6>
												<p class="txt-color-05">60 Minute Session Packages</p>
												<h6 class="h6-lg pricing-list-amount txt-color-01">$55</h6>
											</li>

										</ul>
									</div>
								</div>


							</div>  <!-- End row -->	
					 	</div>	<!-- END PRICING TABLES WRAPPER -->


					</div>	   <!-- End container -->
				</section>	<!-- END PRICING-2 -->




				<!-- TEAM-1
				============================================= -->
				<section id="team-1" class="bg-color-01 wide-60 team-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-lg-10 offset-lg-1">
								<div class="section-title mb-60 text-center">	

									<!-- Transparent Header -->	
									<h2 class="tra-header txt-color-02">Our Team</h2>	

									<!-- Title 	-->	
									<h3 class="h3-xl txt-color-01">Relax, You're In Good Hands</h3>	

									<!-- Text -->	
									<p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
									   primis libero tempus, blandit a cursus varius at magna tempor
									</p>
										
								</div>	
							</div>
						</div>


						<!-- TEAM MEMBERS WRAPPER -->
				 		<div class="tm-wrapper">
							<div class="row">	


								<!-- TEAM MEMBER #1 -->
								<div class="col-md-6 col-lg-3">	
									<div class="team-member">

										<!-- Team Member Photo -->
										<div class="team-member-photo">
											<div class="hover-overlay"> 

												<img class="img-fluid" src="images/team-1.jpg" alt="team-member-foto">
											
												<!-- Social Icons -->
												<div class="tm-social clearfix">
													<ul class="text-center clearfix">																		
														<li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
														<li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
														<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
													</ul>
												</div>	

											</div>
										</div>

										<!-- Team Member Meta -->		
										<div class="tm-meta">
											<h6 class="h6-lg txt-color-01">Stacey Richardson</h6>
											<span class="txt-color-06">Beauty Expert</span>
										</div>

									</div>
								</div>


								<!-- TEAM MEMBER #2 -->
								<div class="col-md-6 col-lg-3">	
									<div class="team-member">

										<!-- Team Member Photo -->
										<div class="team-member-photo">
											<div class="hover-overlay"> 

												<img class="img-fluid" src="images/team-2.jpg" alt="team-member-foto">
											
												<!-- Social Icons -->
												<div class="tm-social clearfix">
													<ul class="text-center clearfix">																		
														<li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
														<li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
														<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
													</ul>
												</div>	

											</div>
										</div>

										<!-- Team Member Meta -->		
										<div class="tm-meta">
											<h6 class="h6-lg txt-color-01">Jennifer Harper</h6>
											<span class="txt-color-06">SPA Master</span>
										</div>	

									</div>
								</div>


								<!-- TEAM MEMBER #3 -->
								<div class="col-md-6 col-lg-3">	
									<div class="team-member">

										<!-- Team Member Photo -->
										<div class="team-member-photo">
											<div class="hover-overlay"> 

												<img class="img-fluid" src="images/team-3.jpg" alt="team-member-foto">
											
												<!-- Social Icons -->
												<div class="tm-social clearfix">
													<ul class="text-center clearfix">																		
														<li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
														<li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
														<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
													</ul>
												</div>	

											</div>
										</div>

										<!-- Team Member Meta -->		
										<div class="tm-meta">
											<h6 class="h6-lg txt-color-01">Rodney Stratton</h6>
											<span class="txt-color-06">Beautician</span>
										</div>

									</div>
								</div>


								<!-- TEAM MEMBER #4 -->
								<div class="col-md-6 col-lg-3">	
									<div class="team-member">

										<!-- Team Member Photo -->
										<div class="team-member-photo">
											<div class="hover-overlay"> 

												<img class="img-fluid" src="images/team-4.jpg" alt="team-member-foto">

												<!-- Social Icons -->
												<div class="tm-social clearfix">
													<ul class="text-center clearfix">																		
														<li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
														<li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
														<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
													</ul>
												</div>	

											</div>
										</div>

										<!-- Team Member Meta -->		
										<div class="tm-meta">
											<h6 class="h6-lg txt-color-01">Jane Smith</h6>
											<span class="txt-color-06">Beauty Therapist</span>
										</div>	

									</div>
								</div>


							</div>	<!-- End row -->
						</div>	<!-- END TEAM MEMBERS WRAPPER -->


					</div>	   <!-- End container -->	
				</section>	<!-- END TEAM-1 -->




				<!-- BANNER-5
				============================================= -->
				<section id="banner-5" class="bg-fixed bg-image banner-section division">
					<div class="container">
						<div class="row d-flex align-items-center">


							<!-- TEXT BLOCK -->	
							<div class="col-lg-6 offset-lg-3">
								<div class="banner-5-txt text-center">

									<!-- Title -->	
									<h2 class="h2-xl txt-color-05">Get 20% Off</h2>
									<h3 class="h3-xs txt-color-01">For Your First Visit</h3>

									<!-- Text -->
									<p class="p-md txt-color-05">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor an tempus 
									   feugiat dolor undo lacinia cubilia curae
									</p>

									<!-- Button -->	
									<a href="booking.html" class="btn btn-md btn-color-02 color-01-hover">Book Now</a>

								</div>
							</div>	<!-- END TEXT BLOCK -->	

						</div>	  <!-- End row -->	
					</div>	   <!-- End container -->
				</section>	<!-- END BANNER-5 -->




				<!-- TESTIMONIALS-1
				============================================= -->
				<section id="reviews-1" class="bg-color-01 wide-100 reviews-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-lg-10 offset-lg-1">
								<div class="section-title mb-60 text-center">	

									<!-- Transparent Header -->	
									<h2 class="tra-header txt-color-02">Testimonials</h2>	

									<!-- Title 	-->	
									<h3 class="h3-xl txt-color-01">What Our Clients Say</h3>	

									<!-- Text -->	
									<p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
									   primis libero tempus, blandit a cursus varius at magna tempor
									</p>
										
								</div>	
							</div>
						</div>
					
						
						<!-- TESTIMONIALS CONTENT -->
						<div class="row">
							<div class="col-md-12">					
								<div class="owl-carousel owl-theme reviews-wrapper">

							
									<!-- TESTIMONIAL #1 -->
									<div class="review-1">
										
										<!-- Testimonial Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-1.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Author -->
										<div class="author-data txt-color-01">
											<h6 class="h6-sm">Kelly Walke</h6>	
											<p>Housewife</p>									
										</div>
																										
										<!-- Testimonial Text -->
										<div class="review-1-txt txt-color-05">
											<p>Sagittis congue etiam sapien sem accumsan suscipit egestas lobortis magna, porttitor
											   sodales vitae aenean mauris tempor risus lectus 								   
											</p>															
										</div>	
																
									</div>
							
							
									<!-- TESTIMONIAL #2 -->
									<div class="review-1">
										
										<!-- Testimonial Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-2.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Author -->
										<div class="author-data txt-color-01">
											<h6 class="h6-sm">Linda Ferell</h6>
											<p>Designer</p>									
										</div>
																										
										<!-- Testimonial Text -->
										<div class="review-1-txt txt-color-05">
											<p>Sapien sem accumsan  vitae purus diam integer congue magna undo. Magna, sodales vitae
											   aenean mauris tempor risus lectus aenean magna ipsum vitae purus	vitae						   
											</p>															
										</div>	
																
									</div>
							
							
									<!-- TESTIMONIAL #3 -->
									<div class="review-1">

										<!-- Testimonial Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-3.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Author -->
										<div class="author-data txt-color-01">
											<h6 class="h6-sm">Evelyn Martinez</h6>
											<p>Journalist</p>									
										</div>
																										
										<!-- Testimonial Text -->
										<div class="review-1-txt txt-color-05">
											<p>Etiam sapien sem accumsan sagittis congue. Suscipit egestas at lobortis magna, porttitor
											   sodales vitae aenean mauris tempor risus lectus aenean diam aenean mauris								   
											</p>															
										</div>	
																
									</div>
									
									
									<!-- TESTIMONIAL #4 -->
									<div class="review-1">
										
										<!-- Testimonial Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-4.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Author -->
										<div class="author-data txt-color-01">
											<h6 class="h6-sm">Laura Merino</h6>
											<p>Fashion Designer</p>								
										</div>
																										
										<!-- Testimonial Text -->
										<div class="review-1-txt txt-color-05">
											<p>Egestas egestas magna ipsum vitae purus efficitur ipsum primis in cubilia laoreet augue
											   congue. An egestas lobortis magna, sodales vitae 								   
											</p>															
										</div>	
																
									</div>
									
									
									<!-- TESTIMONIAL #5 -->
									<div class="review-1">
										
										<!-- Testimonial Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-5.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Author -->
										<div class="author-data txt-color-01">
											<h6 class="h6-sm">Elizabeth Ross</h6>
											<p >Biologist</p>									
										</div>
																										
										<!-- Testimonial Text -->
										<div class="review-1-txt txt-color-05">
											<p>An orci nullam tempor sapien, eget orci gravida donec enim ipsum porta justo integer and
											   odio velna auctor. Egestas magna ipsum vitae purus ipsum primis in laoreet augue								   
											</p>															
										</div>
																
									</div>
									
									
									<!-- TESTIMONIAL #6 -->
									<div class="review-1">

										<!-- Testimonial Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-6.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Author -->
										<div class="author-data txt-color-01">
											<h6 class="h6-sm">Carmen M. Garcia</h6>	
											<p>Graphic Designer</p>									
										</div>
																										
										<!-- Testimonial Text -->
										<div class="review-1-txt txt-color-05">
											<p>Mauris donec ociis et magnis sapien an etiam sapien sem sagittis congue augue. An orci nullam
											   tempor sapien, eget orci gravida donec porta							   
											</p>															
										</div>	
																
									</div>
									
									
									<!-- TESTIMONIAL #7 -->
									<div class="review-1">

										<!-- Testimonial Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-7.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Author -->
										<div class="author-data txt-color-01">
											<h6 class="h6-sm">Penelopa M.</h6>	
											<p>Manager</p>								
										</div>
																										
										<!-- Testimonial Text -->
										<div class="review-1-txt txt-color-05">
											<p>At sagittis congue augue egestas egestas magna ipsum vitae purus ipsum primis in cubilia
											   laoreet augue diam ociis nullam tempor 		   
											</p>															
										</div>	
																
									</div>

								
								</div>
							</div>									
						</div>	<!-- END TESTIMONIALS CONTENT --> 
								
							
					</div>	   <!-- End container -->
				</section>	 <!-- END TESTIMONIALS-1 -->




				<!-- CONTACTS-1
				============================================= -->
				<section id="contacts-1" class="bg-color-02 wide-60 contacts-section division">
					<div class="container">


						<!-- SECTION TITLE -->	
						<div class="row">	
							<div class="col-lg-10 offset-lg-1">
								<div class="section-title mb-60 text-center">	

									<!-- Transparent Header -->	
									<h2 class="tra-header txt-color-02">Contact Us</h2>	

									<!-- Title 	-->	
									<h3 class="h3-xl txt-color-01">Have Any Questions?</h3>	

									<!-- Text -->	
									<p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
									   primis libero tempus, blandit a cursus varius at magna tempor
									</p>
										
								</div>	
							</div>
						</div>


					 	<div class="row">


							<!-- CONTACT FORM -->
					 		<div class="col-md-7 col-lg-8">
								<div class="google-map mb-40">
									
									<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->					
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8393924898796!2d144.9536363151022!3d-37.817230742014345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e793770d3%3A0x9e44d6ad0d76ba7c!2zMTIxIEtpbmcgU3QsIE1lbGJvdXJuZSBWSUMgMzAwMCwg0JDQstGB0YLRgNCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1469002590349" width="600" height="450"></iframe>
											
					 			</div>	
					 		</div>	<!-- END CONTACT FORM -->	


					 		<!-- CONTACTS INFO -->
					 		<div class="col-md-5 col-lg-4">
					 			<div class="contacts-info pc-25 mt-35 mb-40">

							 		<!-- LOCATION -->
									<div class="cbox-1 mb-30">
										<h5 class="h5-sm txt-color-01">Our Location</h5>													
										<p class="p-md txt-color-05">121 King Street, Melbourne,</p>
										<p class="p-md txt-color-05">Victoria 3000 Australia</p>
									</div>

									<!-- PHONES -->
									<div class="cbox-1 mb-30">
										<h5 class="h5-sm txt-color-01">Contact Info</h5>	
										<p class="p-md txt-color-05"><span>Phone :</span> +12 3 3456 7890</p>
										<p class="p-md txt-color-05"><span>Email :</span> <a href="mailto:yourdomain@mail.com">hello@yourdomain.com</a></p>
										<p class="p-md txt-color-05"><span>Skype :</span> <a href="tel:123456789">support.spamagic</a></p>
									</div>

									<!-- EMAILS -->
									<div class="cbox-1">
										<h5 class="h5-sm txt-color-01">Working Hours</h5>	
										<p class="p-md txt-color-05"><span>Mon – Fri :</span> 9:00 AM - 7:00 PM</p>
										<p class="p-md txt-color-05"><span>Saturday :</span> 9:00 AM - 6:00 PM</p>
										<p class="p-md txt-color-05"><span>Sunday :</span> Closed</p>
									</div>

								</div>	
							</div>	<!-- END CONTACTS INFO -->


						</div>	 <!-- End row -->


					</div>	   <!-- End container -->	
				</section>	<!-- END CONTACTS-1 -->





				<x-footer/>




			</div>	




		</div>
@endsection