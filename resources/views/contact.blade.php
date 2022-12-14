@extends('layouts.app')
@section('content')
<div id="page" class="page">

<x-header/>



			<!-- INNER PAGE WRAPPER
			============================================= -->	
			<div class="inner-page-wrapper">




				<!-- PAGE HERO
				============================================= -->	
				<section id="contacts-page" class="bg-fixed wide-100 page-hero-section division">
					<div class="container">	


						<!-- PAGE HERO TEXT -->
						<div class="row">	
							<div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
								<div class="hero-txt text-center white-color">

									<!-- Title -->
									<h2 class="h2-lg">Contact Us</h2>

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
										    	<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
										    	<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
										  	</ol>
										</nav>
									</div>
								</div>
							</div> 
						</div>	<!-- END BREADCRUMB -->


					</div>	   <!-- End container --> 
				</section>	<!-- END PAGE HERO -->




				
				<!-- CONTACTS-3
				============================================= -->
				<section id="contacts-3" class="bg-color-01 wide-60 contacts-section division">				
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


						<!-- GOOGLE MAP -->	
						<div class="row">	
							<div class="col-md-12">
								<div class="google-map mb-80">
													
									<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->					
									{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8393924898796!2d144.9536363151022!3d-37.817230742014345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e793770d3%3A0x9e44d6ad0d76ba7c!2zMTIxIEtpbmcgU3QsIE1lbGJvdXJuZSBWSUMgMzAwMCwg0JDQstGB0YLRgNCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1469002590349" width="600" height="450"></iframe> --}}
                                    <div class="mapouter">
                                    <div class="gmap_canvas">
                                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Olico Diep&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
											
					 			</div>
					 		</div>
		 				</div>	<!-- END GOOGLE MAP -->	


					 	<div class="row">


							<!-- CONTACT FORM -->
					 		<div class="col-md-7 col-lg-8">

					 			<!-- Title -->
				 				<h4 class="h4-xs txt-color-01">Send A Message</h4>

				 				<!-- Text -->	
								<p class="txt-color-05">If you want to ask anything just fill in the form below and send us.</p>

								<!-- Form -->	
					 			<div class="form-holder">
									<form name="contactform" class="row contact-form">
																							
										<!-- Form Input -->
						                <div class="col-lg-6">
						                	<input type="text" name="name" class="form-control name" placeholder="Your Name*"> 
						                </div>
						                  
						                <!-- Form Input -->        
						                <div class="col-lg-6">
						                	<input type="email" name="email" class="form-control email" placeholder="Email Address*"> 
						                </div>

						                <!-- Form Input -->   
										<div class="col-md-12">
											<input type="text" name="subject" class="form-control subject" placeholder="What's this about?"> 
										</div>
		
										<!-- Form Textarea -->	        
						                <div class="col-md-12">
						                	<textarea name="message" class="form-control message" rows="6" placeholder="Your Message ..."></textarea>
						                </div> 
						                                            
						                <!-- Form Button -->
						                <div class="col-md-12 mt-5 text-right">  
						                	<button type="submit" class="btn btn-md btn-color-02 tra-02-hover submit">Send Message</button> 
						                </div>
						                                                              
						                <!-- Form Message -->
						                <div class="col-md-12 contact-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>	
																								
									</form>	

					 			</div>	
					 		</div>	<!-- END CONTACT FORM -->	


					 		<!-- CONTACTS INFO -->
					 		<div class="col-md-5 col-lg-4">
					 			<div class="contacts-info mb-40">

					 				<!-- Title -->
					 				<h4 class="h4-xs txt-color-01">Contact Details</h4>

					 				<!-- Text -->	
									<p class="txt-color-05">Integer congue magna pretium ligula at rutrum risus luctus a dolor auctor ipsum 
									   blandit purus. Curabitur ac dapibus libero mauris donec
									</p>

									<!-- LOCATION -->
									<div class="cbox-1 mt-25 mb-25">
										<h5 class="h5-xs txt-color-01">Our Location</h5>													
										<p class="txt-color-05">121 King Street, Melbourne,</p>
										<p class="txt-color-05">Victoria 3000 Australia</p>
									</div>

									<!-- PHONES -->
									<div class="cbox-1 mb-25">
										<h5 class="h5-xs txt-color-01">Contact Info</h5>	
										<p class="txt-color-05"><span>Phone :</span> +12 3 3456 7890</p>
										<p class="txt-color-05"><span>Email :</span> <a href="mailto:yourdomain@mail.com">hello@yourdomain.com</a></p>
										<p class="txt-color-05"><span>Skype :</span> <a href="tel:123456789">support.spamagic</a></p>
									</div>

									<!-- WORKING HOURS -->
									<div class="cbox-1">
										<h5 class="h5-xs txt-color-01">Working Hours</h5>	
										<p class="txt-color-05"><span>Mon ??? Fri :</span> 9:00 AM - 7:00 PM</p>
										<p class="txt-color-05"><span>Saturday :</span> 9:00 AM - 6:00 PM</p>
										<p class="txt-color-05"><span>Sunday :</span> Closed</p>
									</div>

								</div>	
							</div>	<!-- END CONTACTS INFO -->


						</div>	<!-- End row -->


					</div>	   <!-- End container -->		
				</section>
				<x-footer/>




			</div>	<!-- END INNER PAGE WRAPPER -->




		</div>
        @endsection