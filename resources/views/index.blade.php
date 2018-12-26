<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BIZ GURUKUL</title>
<!-- Stylesheets -->
<link href="{{ URL::asset('public/asset/css/bootstrap.css')}}" rel="stylesheet">

<link href="{{URL::asset('public/asset/css/style.css')}}" rel="stylesheet" type="text/css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="{{URL::asset('public/asset/css/slick.css')}}" rel="stylesheet">
<link href="{{URL::asset('public/asset/css/responsive.css')}}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<link href="{{URL::asset('public/asset/css/color.css')}}" rel="stylesheet">

<link href="{{URL::asset('public/asset/css/animate.css')}}" rel="stylesheet">
<link href="{{URL::asset('public/asset/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{URL::asset('public/asset/css/flaticon.css')}}" rel="stylesheet">

<link href="{{URL::asset('public/asset/css/hover.css')}}" rel="stylesheet">

<link href="{{URL::asset('public/asset/css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{URL::asset('public/asset/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('public/asset/css/owl.css')}}" rel="stylesheet">

<link href="{{asset('public/asset/css/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet">



<link rel="shortcut icon" href="{{asset('public/asset/images/logo.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('public/asset/images/logo.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <!-- Main Header-->
    <header class="main-header">
    	
    	<!--Header Top-->
    	
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div style="width:200px;height:40px;" class="logo"><a href="index.html"><img src="{{asset('public/asset/images/logo2.png')}}" alt="" title=""></a></div>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
                    
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="current dropdown"><a href="{{URL::to('/')}}/welcome">Home</a>
									
									</li>
									<li class="dropdown"><a href="{{URL::to('/')}}/about">About</a>
										<ul>
											<li><a href="{{URL::to('/')}}/about">About Us</a></li>
											<li><a href="#team">Team</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="{{URL::to('/')}}/service">Services</a>
										<ul>
											<li><a href="{{URL::to('/')}}/service">Reports & Insights</a></li>
											<!-- <li><a href="services-two.html">Services Type 02</a></li>
											<li><a href="financial-investment.html">Financial Investment</a></li>
											<li><a href="market-research.html">Market Research</a></li>
											<li><a href="feasibility.html">Feasibility Studies</a></li>
											<li><a href="business-consult.html">Business Consulting</a></li>
											<li><a href="growth-track.html">Growth Tracking</a></li>
											<li><a href="training-work.html">Training & Workshop</a></li>
											<li><a href="investment-plan.html">Investment Planning</a></li>
											<li><a href="global-coach.html">Global Coaching</a></li> -->
										</ul>
									</li>
									<li class="dropdown"><a href="#">Biz Exclusives</a>
										<ul>
											<li><a href="{{URL::to('/')}}/biz">Biz Exclusives</a></li>
											
										</ul>
									</li>
									<li class="dropdown"><a href="#">Biz Talks</a>
										<ul>
											<li><a href="{{URL::to('/')}}/service">Biz Talks</a></li>
											
										</ul>
									</li>
									<li><a href="contact.html">Events</a></li>
									<li><a href="{{URL::to('/')}}/contact">Contact us</a></li>
								</ul>
							</div>
							
						</nav>
						<div class="support-box" style="margin-top:8%;">
						     <a href="#"><span  style="font-size:20px;" class="fa fa-facebook"></span></a>&nbsp;&nbsp;
							<a href="#"><span  style="font-size:20px;" class="fa fa-linkedin"></span></a>&nbsp;&nbsp;
							
					&nbsp;&nbsp;		<a href="#"><span  style="font-size:20px;" class="fa fa-twitter"></span></a>
						</div>
						<!--Search Box Outer-->
						<div class="search-box-outer">
							<div class="dropdown">
								<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
								<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
									<li class="panel-outer">
										<div class="form-container">
											<form method="post" action="blog.html">
												<div class="form-group">
													<input type="search" name="field-name" value="" placeholder="Search Here" required>
													<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
												</div>
											</form>
										</div>
									</li>

							
							
						
								</ul>
							</div>
						</div>

					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left" style="width:200px;height:20px;margin-top:-5px;" >
                	<a href="index.html" class="img-responsive"><img src="{{asset('public/asset/images/logo2.png')}}" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{URL::to('/')}}/welcome">Home</a>
									<!-- <ul>
										<li><a href="index.html">Home Page 01</a></li>
										<li><a href="index-2.html">Home Page 02</a></li>
										<li><a href="index-3.html">Home Page 03</a></li>
										<li><a href="index-4.html">Home Page 04</a></li>
										<li><a href="index-5.html">Home Page 05</a></li>
										<li class="dropdown"><a href="#">Header Styles</a>
											<ul>
												<li><a href="index.html">Header Style 01</a></li>
												<li><a href="index-2.html">Header Style 02</a></li>
												<li><a href="index-3.html">Header Style 03</a></li>
												<li><a href="index-4.html">Header Style 04</a></li>
												<li><a href="index-5.html">Header Style 05</a></li>
											</ul>
										</li>
									</ul> -->
								</li>
								<li class="dropdown"><a href="#">About</a>
									<ul>
										<li><a href="{{URL::to('/')}}/about">About Us</a></li>
										<li><a href="#team">Team</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="{{URL::to('/')}}/service">Services</a>
									<ul>
										<li><a href="{{URL::to('/')}}/service">Reports & Insights</a></li>
										<!-- <li><a href="services-two.html">Services Type 02</a></li>
										<li><a href="financial-investment.html">Financial Investment</a></li>
										<li><a href="market-research.html">Market Research</a></li>
										<li><a href="feasibility.html">Feasibility Studies</a></li>
										<li><a href="business-consult.html">Business Consulting</a></li>
										<li><a href="growth-track.html">Growth Tracking</a></li>
										<li><a href="training-work.html">Training & Workshop</a></li>
										<li><a href="investment-plan.html">Investment Planning</a></li>
										<li><a href="global-coach.html">Global Coaching</a></li> -->
									</ul>
								</li>
								<li class="dropdown"><a href="#">Portfolio</a>
									<ul>
										<li><a href="portfolio-two-column.html">Portfolio Two Column</a></li>
										<li><a href="portfolio-three-column.html">Portfolio Three Column</a></li>
										<li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
										<li><a href="portfolio-single.html">Portfolio Single</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Blog</a>
									<ul>
										<li><a href="blog.html">Blog Grid Style</a></li>
										<li><a href="blog-left.html">Blog Left Sidebar</a></li>
										<li><a href="blog-classic.html">Blog Fullwidth</a></li>
										<li><a href="blog-single.html">Blog Single Post</a></li>
									</ul>
								</li>
								<li><a href="{{URL::to('/')}}/contact">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
      @yield('content')
      <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
      <footer class="main-footer">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
									</div>
									<div class="text">58 BalSouth Lane, Harward Street Newyork 33025</div>
									<ul class="list-style-one">
										<li><span>Phone:</span>  1-800-369-8527</li>
										<li><span>Email:</span>  support@zemencon.com</li>
										<li><span>Working Hours:</span>  Mon - Fri: 9am - 6pm</li>
									</ul>
									<!--Social Icon One-->
									<ul class="social-icon-one">
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h2>Quick Links</h2>
                                	<ul class="footer-link">
										<li><a href="#">About Us</a></li>
										<li><a href="{{URL::to('/')}}/service">Our Services</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Our Projects</a></li>
										<li><a href="#">Latest News</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="{{URL::to('/')}}/contact">Contact Us</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget posts-widget">
									<h2>Recent Posts</h2>
									
									<article class="post">
										<div class="text"><a href="blog-single.html">Isolate & Reframe Your Beliefs</a></div>
										<ul class="post-date">
											<li>By Ken Smith</li>
											<li>Sep 25 2018</li>
										</ul>
									</article>
									
									<article class="post">
										<div class="text"><a href="blog-single.html">Take Action For Your Business</a></div>
										<ul class="post-date">
											<li>By Thomas</li>
											<li>Sep 25 2018</li>
										</ul>
									</article>
									
									<article class="post">
										<div class="text"><a href="blog-single.html">Improve Your Business Ideas</a></div>
										<ul class="post-date">
											<li>By Admin</li>
											<li>Sep 25 2018</li>
										</ul>
									</article>
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
									<h2>Our Newsletter</h2>
									<div class="text">Get in your inbox the latest News and Offers from zemen</div>
									<div class="newsletter-form">
                                        <form method="post" action="{{URL::to('/')}}/contact">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="Email address" required="">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
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
		<!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            	<div class="row clearfix">
                	<div class="column col-md-6 col-sm-12 col-xs-12">
                    	<div class="copyright">Copyrights &copy; 2018 zemen Consulting. All Rights Reserved. </div>
                    </div>
                    <div class="column col-md-6 col-sm-12 col-xs-12">
                    	<ul class="footer-nav">
                        	<li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Legal Terms</a></li>
                            <li><a href="#">FAQ’s</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</footer>
    <!--End Main Header -->

 </div>


<script src="{{asset('public/asset/js/jquery.js')}}"></script>
<script src="{{asset('public/asset/js/popper.min.js')}}"></script>
<script src="{{asset('public/asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/asset/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('public/asset/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('public/asset/js/appear.js')}}"></script>
<script src="{{asset('public/asset/js/owl.js')}}"></script>
<script src="{{asset('public/asset/js/wow.js')}}"></script>
<script src="{{asset('public/asset/js/slick.js')}}"></script>
<script src="{{asset('public/asset/js/jquery-ui.js')}}"></script>
<script src="{{asset('public/asset/js/script.js')}}"></script>

<script src="{{asset('public/asset/js/respond.js')}}"></script>
<script src="{{asset('public/asset/js/popper.js')}}"></script>
<script src="{{asset('public/asset/js/mixitup.js')}}"></script>
<script src="{{asset('public/asset/js/main-script.js')}}"></script>
<script src="{{asset('public/asset/js/jquery.easing.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?key=
AIzaSyAvjFd7lb-w56XwIJkYuUtDOJYMnuVSN9Q
"></script>


</body>
</html>
