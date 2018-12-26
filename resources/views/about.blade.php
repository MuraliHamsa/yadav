@extends('index')
@section('content')
  

    <!--Main Slider-->
    @foreach($post as $posts)
    <section class="main-slider">
      
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image:url('/kavi/public/storage/{{$posts->banner1_image}}')">
                <div class="auto-container">
                  <div class="content">
                     <!--  <h3>Get The Success You Need</h3>
                      -->
                      <div class="text">{!!$posts->banner1_text !!}</div>
                      <div class="link-box">
           
            </div>
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background-image:url('/kavi/public/storage/{{$posts->banner2_image}}')">
                <div class="auto-container">
                  <div class="content">
                      <!-- <h3 class="style-two">Get The Success You Need</h3> -->
                      
                      <div class="text">{!!$posts->banner2_text !!}</div>
                      <div class="link-box">
            
            </div>
                    </div>
                </div>
            </div>
              <div class="slide" style="background-image:url('/kavi/public/storage/{{$posts->banner3_image}}')">
                <div class="auto-container">
                  <div class="content">
                      <!-- <h3 class="style-two">Get The Success You Need</h3> -->
                      
                      <div class="text">{!!$posts->banner3_text !!}</div>
                      <div class="link-box">
              <!--  <a href="#" class="theme-btn btn-style-two">learn more</a> <a href="#" class="theme-btn btn-style-three">Our Servics</a> -->
            </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Main Slider-->
 
 
  <!--About Section-->
  <section class="about-section">
    <div class="auto-container">
      <div class="row clearfix">
        
        <!--Title Column-->
        <div class="title-column col-lg-5 col-md-12 col-sm-12">
          <div class="inner-column">
            <!--Sec Title-->
            <div class="sec-title">
              <h2>Future Leaders</h2>
              <div class="title-text">Automate & Simplify The Whole Process</div>
            </div>
            <div class="text">{!! $posts->future_text  !!}</div>
            <a href="#" class="theme-btn btn-style-five">Who We Are</a>
          </div>
        </div>
        
        <!--Video Column-->
        <div class="video-column col-lg-7 col-md-12 col-sm-12">
          <div class="inner-column wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
            <?php 
                 $s = json_decode($posts->future_video);
                 
                 $y = $s[0]->download_link;
                ?>
            <!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                              <video  height="440">
                                
                              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4" >
                              </video>
                            </figure>
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-arrow"></span></a>
                        </div>
            
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--End About Section-->
  
 <section class="featured-section-two">
    <div class="auto-container">
      <div class="row clearfix">
        
        <!--Feature Block Four-->
        <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="icon-box">
              <span class="icon flaticon-graph-1"></span>
            </div>
            
            <div class="text">{!! $posts->business1 !!}</div>
          </div>
        </div>
        
        <!--Feature Block Four-->
        <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
            <div class="icon-box">
              <span class="icon flaticon-strategy"></span>
            </div>
           
            <div class="text">{!! $posts->business2 !!}</div>
          </div>
        </div>
        
        <!--Feature Block Four-->
        <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
            <div class="icon-box">
              <span class="icon flaticon-sports-and-competition"></span>
            </div>
           
            <div class="text">{!! $posts->business3 !!}</div>
          </div>
        </div>
        
        <!--Feature Block Four-->
        <div class="feature-block-four col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
            <div class="icon-box">
              <span class="icon flaticon-graph"></span>
            </div>
           
            <div class="text">{!! $posts->business4 !!}</div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!--Fluid Section One-->
  @foreach($post1 as $posthome)
    <section class="fluid-section-one">
      <div class="outer-container clearfix">
          
            <!--Image Column-->
            <div class="image-column" style="background-image:url('/kavi/public/storage/{{$posthome->mission_image}}');">
              <figure class="image-box"><img src="public/asset/images/resource/image-1.jpg" alt=""></figure>
            </div>
            
          <!--Content Column-->
            <div class="content-column">
              <div class="inner-column">
          <div class="clearfix">
            
            <!--Title Column-->
            <div class="title-box">
              <div class="box-inner">
                <h2>Mission <br> & History</h2>
                <div class="text">{!! $posthome->mission_text !!}</div>
              </div>
            </div>
            
            <!--Carousel Box-->
            <div class="carousel-box">
              <div class="box-inner">
                <div class="quote-icon">
                  <span class="icon flaticon-right-quote-sign"></span>
                </div>
                
                <div class="single-item-carousel owl-carousel owl-theme">
                  
                  <!--Testimonial Block-->
                  <div class="testimonial-block">
                    <div class="inner-box">
                      <div class="text">{!! $posthome-> mission_post !!}</div>
                    </div>
                  </div>
                  
                  <!--Testimonial Block-->
                  <div class="testimonial-block">
                    <div class="inner-box">
                      <div class="text">{!! $posthome-> mission_post !!}</div>
                    </div>
                  </div>
                  
                  <!--Testimonial Block-->
                  <div class="testimonial-block">
                    <div class="inner-box">
                      <div class="text">{!! $posthome-> mission_post !!}</div>
                    </div>
                  </div>
                  
                </div>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
  </section>
  @endforeach
  <!--End Fluid Section One-->
 <!--Call To Action Section-->
  <section class="call-to-action-two" style="background-image: url('/kavi/public/storage/{{$posts->get_in_image}}')">
    <div class="auto-container">
      
      <div class="text">{!! $posts->get_blog !!} </div>
    </div>
  </section>
  <!--End Call To Action Section-->
  <!--Consulting Section-->
  <section class="consulting-section alternate">
    <div class="auto-container">
      <!--Sec Title-->
      <div class="sec-title centered">
        <h2>Special Consulting</h2>
        <div class="title-text">Automate & Simplify The Whole Process</div>
      </div>
      <div class="single-item-carousel owl-carousel owl-theme">
        
        <!--Consult Block-->
        <div class="consult-block alternate">
          <div class="inner-box">
            <div class="clearfix">
              <!--Image Column-->
              <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                  <div class="image">
                    <img src="/kavi/public/storage/{{$posts->consulting1_image}}" alt="" />
                  </div>
                </div>
              </div>
              <!--Content Column-->
              <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                 
                  <div class="text">{!! $posts->consulting1_text  !!} </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Consult Block-->
        <div class="consult-block alternate">
          <div class="inner-box">
            <div class="clearfix">
              <!--Image Column-->
              <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                  <div class="image">
                    <img src="/kavi/public/storage/{{$posts->consulting2_image}}" alt="" />
                  </div>
                </div>
              </div>
              <!--Content Column-->
              <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                  
                  <div class="text">{!! $posts->consulting2_text  !!}</div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Consult Block-->
        <div class="consult-block alternate">
          <div class="inner-box">
            <div class="clearfix">
              <!--Image Column-->
              <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                  <div class="image">
                    <img src="/kavi/public/storage/{{$posts->consulting3_image}}" alt="" />
                  </div>
                </div>
              </div>
              <!--Content Column-->
              <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                 
                  <div class="text">{!! $posts->consulting_text   !!} </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--End Consulting Section-->
<center><h2 style="text-align:justify;text-align:center;font-weight:bold;" >OUR TEAM</h2></center>
  <section class="team-page-section" id="team">
    <div class="auto-container">
      <div class="row clearfix">
        
        <!--Team Block-->
        <div class="team-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="/kavi/public/storage/{{$posts->team1_image}}" alt="" />
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content">
                    <div class="social-box">
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-linkedin"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="lower-content">
             
              <div class="designation">{!! $posts->team1_text !!}</div>
            </div>
          </div>
        </div>
        
        <!--Team Block-->
        <div class="team-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="/kavi/public/storage/{{$posts->team2_image}}" alt="" />
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content">
                    <div class="social-box">
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-linkedin"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="lower-content">
              
              <div class="designation">{!! $posts->team2_text !!}</div>
            </div>
          </div>
        </div>
        
        <!--Team Block-->
        <div class="team-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="/kavi/public/storage/{{$posts->team3_image}}" alt="" />
              <div class="overlay-box">
                <div class="overlay-inner">
                  <div class="content">
                    <div class="social-box">
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-linkedin"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="lower-content">
            
              <div class="designation">{!! $posts->team3_text !!}</div>
            </div>
          </div>
        </div>
        
        <!--Team Block-->
       
        
        <!--Team Block-->
        
        
        <!--Team Block-->
        
        
      </div>
    </div>
  </section>
  
  @endforeach
<!--End pagewrapper--><!--Scroll to top--><div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
   

  @endsection  
