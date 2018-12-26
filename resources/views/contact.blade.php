@extends('index')
@section('content')
      
<div class="page-wrapper">
 	
    <section class="page-title" style="background-image:url(images/background/6.jpg)">
    	<div class="auto-container">
        	<h1>Contact</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">home</a></li>
               	<li>Contact us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Map Section-->
    <div class="map-section">
    	<div class="auto-container">
       		<!--Map Outer-->
            <div class="map-outer">
                <!--Map Canvas-->
                <div class="map-canvas"
                   >
                 <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyAvjFd7lb-w56XwIJkYuUtDOJYMnuVSN9Q'></script><div style='overflow:hidden;height:515px;width:1403px;'><div id='gmap_canvas' style='height:515px;width:1403px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://addmap.net/'>embed google maps</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=bc51f72a9e24ff7862f4738ce31096c24df43af3'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:20,center:new google.maps.LatLng(41.31,-72.92000000000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.31,-72.92000000000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Biz Gurukul</strong><br>Hsr Layout<br> bangalore<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
            </div>
		</div>
	</div>
	<!--End Map Section-->
	
	<!--Contact Section-->
	<section class="contact-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!--Info Column-->
				<div class="info-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content-box">
							<h2>Do you want to reach at the next level of Business Success?</h2>
							<div class="title">Book a Complimentary Consultation by visiting or calling us!</div>
							<ul class="list-style-three">
								<li><span class="icon fa fa-map-marker"></span>58 BalSouth Lane, Harward Street <br> Newyork 33025</li>
								<li><span class="icon fa fa-phone"></span>1-800-369-8527</li>
								<li><span class="icon fa fa-envelope"></span>support@zemenconsult.net</li>
								<li><span class="icon fa fa-clock-o"></span>Monday to Friday 9 am - 6 pm</li>
							</ul>
							<!--Social Boxed-->
							<ul class="social-boxed">
								<li><a href="#"><span class="fa fa-facebook"></span></a></li>
								<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
								<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
								<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
								<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!--Form Column-->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Send a Message</h2>
						<div class="title">We are working with thousands of business companies around the globe & delivering ideas for their business success.</div>
						<!-- Contact Form -->
                        <div class="contact-form ">
                            <!--Comment Form-->
                            <form method="post" action="sendemail.php" id="contact-form">
                                
								<div class="form-group">
									<input type="text" name="username" placeholder="Your Name" required>
								</div>

								<div class="form-group">
									<input type="email" name="email" placeholder="Email address" required>
								</div>

								<div class="form-group">
									<input type="text" name="phone" placeholder="Phone" required>
								</div>

								<div class="form-group">
									<input type="text" name="subject" placeholder="Subject" required>
								</div>

								<div class="form-group">
									<textarea name="message" placeholder="Message"></textarea>
								</div>

								<div class="form-group">
									<button class="theme-btn message-btn" type="submit" name="submit-form">send message</button>
								</div>
    
                            </form>
    
                        </div>
                    	<!--End Comment Form -->
					</div>
				</div>
				
			</div>
		</div>
	</section>	
	
</div>
<script src="http://maps.google.com/maps/api/js?key=
AIzaSyAvjFd7lb-w56XwIJkYuUtDOJYMnuVSN9Q
"></script>
@endsection      