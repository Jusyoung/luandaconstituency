<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Luanda Constituency</title>
		@yield('styles')
        <!-- Custom CSS -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    </head>
	
    <body class="yellow-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"  style="background-image: url({!! URL::asset('../assets/img/loader.svg') !!});"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div>
				@section('header')
					<div class="header header-transparent change-logo">
						<div class="container">
							<nav id="navigation" class="navigation navigation-landscape">
								<div class="nav-header">
									<a class="nav-brand static-logo" href="#"><img src="assets/img/logo-light.png" class="logo" alt="" /></a>
									<a class="nav-brand fixed-logo" href="#"><img src="assets/img/logo.png" class="logo" alt="" /></a>
									<div class="nav-toggle"></div>
									<div class="mobile_nav">
										<ul>
											<li class="_my_prt_list"><a href="#"><span>2</span>My List</a></li>
											<li><a href="#" data-toggle="modal" data-target="#login"><i class="fas fa-user-circle fa-lg"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="nav-menus-wrapper" style="transition-property: none;">
									<ul class="nav-menu">
									
										<li class="active"><a href="#">Home<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="index.html">Home 1</a></li>
												<li><a href="home-2.html">Home 2</a></li>
												<li><a href="home-3.html">Home 3</a></li>
												<li><a href="home-4.html">Home 4</a></li>
												<li><a href="home-5.html">Home 5</a></li>
												<li><a href="home-6.html">Home 6</a></li>
												<li><a href="home-7.html">Home 7</a></li>
												<li><a href="map.html">Map Home</a></li>
											</ul>
										</li>
										
										<li><a href="#">Listings<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="#">Listing Grid<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="grid-layout-with-sidebar.html">Grid Style 1</a></li>
														<li><a href="grid-layout-2.html">Grid Style 2</a></li>
														<li><a href="grid-layout-3.html">Grid Style 3</a></li>
													</ul>
												</li>
												<li><a href="#">Listing List<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="list-layout-with-sidebar.html">List Style 1</a></li>
														<li><a href="list-layout-with-map-2.html">List Style 2</a></li>
													</ul>
												</li>
												<li><a href="#">Listing Map<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="half-map.html">Half Map</a></li>
														<li><a href="half-map-2.html">Half Map 2</a></li>
														<li><a href="classical-layout-with-map.html">Classical With Sidebar</a></li>
														<li><a href="list-layout-with-map.html">List Sidebar Map</a></li>
														<li><a href="grid-layout-with-map.html">Grid Sidebar Map</a></li>
													</ul>
												</li>
												<li><a href="#">Agents View<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="agents.html">Agent Grid Style</a></li>
														<li><a href="agents-2.html">Agent Grid 2</a></li>
														<li><a href="agent-page.html">Agent Detail Page</a></li>
													</ul>
												</li>
												<li><a href="#">Agency View<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="agencies.html">Agency Grid Style</a></li>
														<li><a href="agency-page.html">Agency Detail Page</a></li>
													</ul>
												</li>
											</ul>
										</li>
										
										<li><a href="#">Property<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li class=""><a href="#">User Admin<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="dashboard.html">User Dashboard</a></li>
														<li><a href="my-profile.html">My Profile</a></li>
														<li><a href="my-property.html">My Property</a></li>
														<li><a href="messages.html">Messages</a></li>
														<li><a href="bookmark-list.html">Bookmark Property</a></li>
														<li><a href="submit-property.html">Submit Property</a></li>
													</ul>
												</li>
												<li><a href="#">Single Property<span class="submenu-indicator"></span></a>
													<ul class="nav-dropdown nav-submenu">
														<li><a href="single-property-1.html">Single Property 1</a></li>
														<li><a href="single-property-2.html">Single Property 2</a></li>
														<li><a href="single-property-3.html">Single Property 3</a></li>
														<li><a href="single-property-4.html">Single Property 4</a></li>
													</ul>
												</li>
												<li><a href="compare-property.html">Compare Property</a></li>
											</ul>
										</li>
										
										<li><a href="#">Pages<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="blog.html">Blog Style</a></li>
												<li><a href="about-us.html">About Us</a></li>
												<li><a href="pricing.html">Pricing</a></li>
												<li><a href="404.html">404 Page</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="contact.html">Contact</a></li>
												<li><a href="component.html">Elements</a></li>
												<li><a href="privacy.html">Privacy Policy</a></li>
												<li><a href="faq.html">FAQs</a></li>
											</ul>
										</li>
										
									</ul>
									
									<ul class="nav-menu nav-menu-social align-to-right">
										
										<li>
											<a href="#" class="alio_green" data-toggle="modal" data-target="#login">
												<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
											</a>
										</li>
										<li class="add-listing">
											<a href="submit-property.html"  class="theme-cl">
												<i class="fas fa-plus-circle mr-1"></i>Add Property
											</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				@show
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<div class="">
				@yield('main_content')
			</div>
			<div>
				@section('footer')		
					<!-- ============================ Footer Start ================================== -->
					<footer class="dark-footer skin-dark-footer style-2">
						<div class="footer-middle">
							<div class="container">
								<div class="row">
									
									<div class="col-lg-5 col-md-5">
										<div class="footer_widget">
											<img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" />
											<h4 class="extream mb-3">Do you need help with<br>anything?</h4>
											<p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every month</p>
											<div class="foot-news-last">
												<div class="input-group">
												<input type="text" class="form-control" placeholder="Email Address">
													<div class="input-group-append">
														<button type="button" class="input-group-text theme-bg b-0 text-light">Subscribe</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-lg-6 col-md-7 ml-auto">
										<div class="row">
										
											<div class="col-lg-4 col-md-4">
												<div class="footer_widget">
													<h4 class="widget_title">Layouts</h4>
													<ul class="footer-menu">
														<li><a href="#">Home Page</a></li>
														<li><a href="#">About Page</a></li>
														<li><a href="#">Service Page</a></li>
														<li><a href="#">Property Page</a></li>
														<li><a href="#">Contact Page</a></li>
														<li><a href="#">Single Blog</a></li>
													</ul>
												</div>
											</div>
													
											<div class="col-lg-4 col-md-4">
												<div class="footer_widget">
													<h4 class="widget_title">All Sections</h4>
													<ul class="footer-menu">
														<li><a href="#">Headers<span class="new">New</span></a></li>
														<li><a href="#">Features</a></li>
														<li><a href="#">Attractive<span class="new">New</span></a></li>
														<li><a href="#">Testimonials</a></li>
														<li><a href="#">Videos</a></li>
														<li><a href="#">Footers</a></li>
													</ul>
												</div>
											</div>
									
											<div class="col-lg-4 col-md-4">
												<div class="footer_widget">
													<h4 class="widget_title">Company</h4>
													<ul class="footer-menu">
														<li><a href="#">About</a></li>
														<li><a href="#">Blog</a></li>
														<li><a href="#">Pricing</a></li>
														<li><a href="#">Affiliate</a></li>
														<li><a href="#">Login</a></li>
														<li><a href="#">Changelog<span class="update">Update</span></a></li>
													</ul>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="footer-bottom">
							<div class="container">
								<div class="row align-items-center">
									<div class="col-lg-12 col-md-12 text-center">
										<p class="mb-0">© 2021 RentUP. Designd By <a href="https://themezhub.com">ThemezHub</a>.</p>
									</div>
								</div>
							</div>
						</div>
					</footer>
					<!-- ============================ Footer End ================================== -->
					
					<!-- Log In Modal -->
					<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
						<div class="modal-dialog modal-xl login-pop-form" role="document">
							<div class="modal-content overli" id="registermodal">
								<div class="modal-body p-0">
									<div class="resp_log_wrap">
										<div class="resp_log_thumb" style="background:url(assets/img/log.jpg)no-repeat;"></div>
										<div class="resp_log_caption">
											<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
											<div class="edlio_152">
												<ul class="nav nav-pills tabs_system center" id="pills-tab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false"><i class="fas fa-user-plus mr-2"></i>Register</a>
												</li>
												</ul>
											</div>
											<div class="tab-content" id="pills-tabContent">
												<div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
													<div class="login-form">
														<form>
														
															<div class="form-group">
																<label>User Name</label>
																<div class="input-with-icon">
																	<input type="text" class="form-control">
																	<i class="ti-user"></i>
																</div>
															</div>
															
															<div class="form-group">
																<label>Password</label>
																<div class="input-with-icon">
																	<input type="password" class="form-control">
																	<i class="ti-unlock"></i>
																</div>
															</div>
															
															<div class="form-group">
																<div class="eltio_ol9">
																	<div class="eltio_k1">
																		<input id="dd" class="checkbox-custom" name="dd" type="checkbox">
																		<label for="dd" class="checkbox-custom-label">Remember Me</label>
																	</div>	
																	<div class="eltio_k2">
																		<a href="#">Lost Your Password?</a>
																	</div>	
																</div>
															</div>
															
															<div class="form-group">
																<button type="submit" class="btn btn-md full-width pop-login">Login</button>
															</div>
														
														</form>
													</div>
												</div>
												<div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
													<div class="login-form">
														<form>
														
															<div class="form-group">
																<label>Full Name</label>
																<div class="input-with-icon">
																	<input type="text" class="form-control">
																	<i class="ti-user"></i>
																</div>
															</div>
															
															<div class="form-group">
																<label>Email ID</label>
																<div class="input-with-icon">
																	<input type="email" class="form-control">
																	<i class="ti-user"></i>
																</div>
															</div>
															
															<div class="form-group">
																<label>Password</label>
																<div class="input-with-icon">
																	<input type="password" class="form-control">
																	<i class="ti-unlock"></i>
																</div>
															</div>
															
															<div class="form-group">
																<div class="eltio_ol9">
																	<div class="eltio_k1">
																		<input id="dd" class="checkbox-custom" name="dd" type="checkbox">
																		<label for="dd" class="checkbox-custom-label">By using the website, you accept the terms and conditions</label>
																	</div>	
																</div>
															</div>
															
															<div class="form-group">
																<button type="submit" class="btn btn-md full-width pop-login">Register</button>
															</div>
														
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
					
					<!-- Send Message -->
					<div class="modal fade" id="autho-message" tabindex="-1" role="dialog" aria-labelledby="authomessage" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
							<div class="modal-content" id="authomessage">
								<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
								<div class="modal-body">
									<h4 class="modal-header-title">Drop Message</h4>
									<div class="login-form">
										<form>
										
											<div class="form-group">
												<label>Subject</label>
												<div class="input-with-icons">
													<input type="text" class="form-control" placeholder="Message Title">
												</div>
											</div>
											
											<div class="form-group">
												<label>Messages</label>
												<div class="input-with-icons">
													<textarea class="form-control ht-80"></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<button type="submit" class="btn btn-md full-width pop-login">Send Message</button>
											</div>
										
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Modal -->
					<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
				@show
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		@yield('scripts')
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/slick.js') }}"></script>
		<script src="{{ asset('assets/js/slider-bg.js') }}"></script>
		<script src="{{ asset('assets/js/lightbox.js') }}"></script> 
		<script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
		<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
		<script src="{{ asset('assets/js/custom.js') }}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>