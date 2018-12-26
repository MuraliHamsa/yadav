@extends('index')
@section('content')
      
        <div class="page-wrapper">
  
    <!-- Preloader -->
    <div class="preloader"></div>
  
    <!-- Main Header-->

    <!--Main Slider-->
    @foreach($post as $posts)
    <section class="main-slider">
      
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image:url('/kavi/public/storage/{{$posts->banner_image1}}')">
                <div class="auto-container">
                  <div class="content">
                      <h3>Get The Success You Need</h3>
                     
                      <div class="text">{!!$posts->banner1_text !!}</div>
                      <div class="link-box">
            <a href="#" class="theme-btn btn-style-two">learn more</a> <a href="#" class="theme-btn btn-style-three">Our Servics</a>
            </div>
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background-image:url('/kavi/public/storage/{{$posts->banner_image2}}')">
                <div class="auto-container">
                  <div class="content">
                      <h3 class="style-two">Get The Success You Need</h3>
                      
                      <div class="text">{!!$posts->banner2_text !!}</div>
                      <div class="link-box">
             <a href="#" class="theme-btn btn-style-two">learn more</a> <a href="#" class="theme-btn btn-style-three">Our Servics</a>
            </div>
                    </div>
                </div>
            </div>
              <div class="slide" style="background-image:url('/kavi/public/storage/{{$posts->banner_image3}}')">
                <div class="auto-container">
                  <div class="content">
                      <h3 class="style-two">Get The Success You Need</h3>
                      
                      <div class="text">{!!$posts->banner3_text !!}</div>
                      <div class="link-box">
               <a href="#" class="theme-btn btn-style-two">learn more</a> <a href="#" class="theme-btn btn-style-three">Our Servics</a>
            </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Main Slider-->
  
 <!--Featured Section-->
  <section class="featured-section">
    <div class="outer-container">
      <div class="four-item-carousel owl-carousel owl-theme">
        
        <!--Feature Block Three-->
        <!--Feature Block Three-->
        <div class="feature-block-three">
          <div class="inner-box">
            <div class="content">
              <div class="icon-box">
                <span class="icon flaticon-portfolio"></span>
              </div>
             
              <div class="text">{!! $posts->post1 !!} </div>
            </div>
          </div>
        </div>
        
        <!--Feature Block Three-->
        <div class="feature-block-three pink">
          <div class="inner-box">
            <div class="content">
              <div class="icon-box">
                <span class="icon flaticon-umbrella-black-silhouette"></span>
              </div>
             
              <div class="text">{!! $posts->post2 !!}</div>
            </div>
          </div>
        </div>
        
        <!--Feature Block Three-->
        <div class="feature-block-three">
          <div class="inner-box">
            <div class="content">
              <div class="icon-box">
                <span class="icon flaticon-wrench"></span>
              </div>
             
              <div class="text">{!! $posts->post3 !!}</div>
            </div>
          </div>
        </div>
        <div class="feature-block-three">
          <div class="inner-box">
            <div class="content">
              <div class="icon-box">
                <span class="icon flaticon-wrench"></span>
              </div>
             
              <div class="text">{!! $posts->post4 !!}</div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--End Featured Section-->
  
  <!--About Section-->
  <section class="about-section">
    <div class="auto-container">
      <div class="row clearfix">
        
        <!--Title Column-->
        <div class="title-column col-lg-5 col-md-12 col-sm-12">
          <div class="inner-column">
            <!--Sec Title-->
            <div class="sec-title">
              <h2>About zemen</h2>
              <div class="title-text">Automate & Simplify The Whole Process</div>
            </div>
            <div class="text">{!! $posts->about  !!}</div>
            <a href="#" class="theme-btn btn-style-five">Who We Are</a>
          </div>
        </div>
        
        <!--Video Column-->
        <div class="video-column col-lg-7 col-md-12 col-sm-12">
          <div class="inner-column wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
            <?php 
                 $s = json_decode($posts->about_video);
                 
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
  
  <!--Fluid Section One-->
    <section class="fluid-section-one">
      <div class="outer-container clearfix">
          
            <!--Image Column-->
            <div class="image-column" style="background-image:url('/kavi/public/storage/{{$posts->mission_image}}');">
              <figure class="image-box"><img src="images/resource/image-1.jpg" alt=""></figure>
            </div>
            
          <!--Content Column-->
            <div class="content-column">
              <div class="inner-column">
          <div class="clearfix">
            
            <!--Title Column-->
            <div class="title-box">
              <div class="box-inner">
                <h2>Mission <br> & History</h2>
                <div class="text">{!! $posts->mission_text !!}</div>
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
                      <div class="text">{!! $posts-> mission_post !!}</div>
                    </div>
                  </div>
                  
                  <!--Testimonial Block-->
                  <div class="testimonial-block">
                    <div class="inner-box">
                      <div class="text">{!! $posts-> mission_post !!}</div>
                    </div>
                  </div>
                  
                  <!--Testimonial Block-->
                  <div class="testimonial-block">
                    <div class="inner-box">
                      <div class="text">{!! $posts-> mission_post !!}</div>
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
  <!--End Fluid Section One-->
  
 
  
  <!--Case Section-->
  <section class="case-section">
    <div class="auto-container">
      <!--Sec Title-->
      <div class="sec-title centered">
        <h2>zemen Case Studies</h2>
        <div class="title-text">Automate & Simplify The Whole Process</div>
      </div>
    </div>
    <div class="four-item-carousel owl-carousel owl-theme">
    
      <!--Case Block-->
      <div class="case-block">
        <div class="inner-box">
          <div class="image">
            <img src="/kavi/public/storage/{{$posts->case1_image}}" alt="" />
            <div class="overlay-box">
              <div class="overlay-inner">
                <div class="content">
                  <div class="text">{!! $posts->case1_text !!}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="lower-box">
            <div class="category">{!! $posts->case1_heaad !!}</div>
            
          </div>
        </div>
      </div>
      <!--Case Block-->
      <div class="case-block">
        <div class="inner-box">
          <div class="image">
            <img src="/kavi/public/storage/{{$posts->case2_image}}" alt="" />
            <div class="overlay-box">
              <div class="overlay-inner">
                <div class="content">
                  <div class="text">{!! $posts->case2_text !!}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="lower-box">
            <div class="category">{!! $posts->case2_head !!}</div>
            
          </div>
        </div>
      </div>
      
      <!--Case Block-->
      <div class="case-block">
        <div class="inner-box">
          <div class="image">
            <img src="/kavi/public/storage/{{$posts->case3_image}}" alt="" />
            <div class="overlay-box">
              <div class="overlay-inner">
                <div class="content">
                  <div class="text">{!! $posts->case3_text !!}</div>
                
                </div>
              </div>
            </div>
          </div>
          <div class="lower-box">
            <div class="category">{!! $posts->case3_head !!}</div>
            
          </div>
        </div>
      </div>
      
      <!--Case Block-->
      <div class="case-block">
        <div class="inner-box">
          <div class="image">
            <img src="/kavi/public/storage/{{$posts->case4_image}}" alt="" />
            <div class="overlay-box">
              <div class="overlay-inner">
                <div class="content">
                  <div class="text">{!! $posts->case4_text !!}</div>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="lower-box">
            <div class="category">{!! $posts->case1_heaad  !!}</div>
            
          </div>
        </div>
      </div>
      
      <!--Case Block-->
      <div class="case-block">
        <div class="inner-box">
          <div class="image">
            <img src="/kavi/public/storage/{{$posts->case1_image}}" alt="" />
            <div class="overlay-box">
              <div class="overlay-inner">
                <div class="content">
                  <div class="text">{!! $posts->case1_text !!}</div>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="lower-box">
            <div class="category">{!! $posts->case1_heaad  !!}</div>
            
          </div>
        </div>
      </div>
      
      <!--Case Block-->
      <div class="case-block">
        <div class="inner-box">
          <div class="image">
            <img src="/kavi/public/storage/{{$posts->case2_image}}" alt="" />
            <div class="overlay-box">
              <div class="overlay-inner">
                <div class="content">
                  <div class="text">{!! $posts->case2_text !!}</div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="lower-box">
            <div class="category">{!! $posts->case4_head !!}</div>
            
          </div>
        </div>
      </div>
      
      <!--Case Block-->
      <div class="case-block">
        <div class="inner-box">
          <div class="image">
            <img src="/kavi/public/storage/{{$posts->case3_image}}" alt="" />
            <div class="overlay-box">
              <div class="overlay-inner">
                <div class="content">
                  <div class="text">{!! $posts->case3_text !!}</div>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="lower-box">
            <div class="category">{!! $posts->case3_head !!}</div>
            
          </div>
        </div>
      </div>
      
      <!--Case Block-->
      <div class="case-block">
        <div class="inner-box">
          <div class="image">
            <img src="/kavi/public/storage/{{$posts->case4_image}}" alt="" />
            <div class="overlay-box">
              <div class="overlay-inner">
                <div class="content">
                  <div class="text">{!! $posts->case4_text !!}</div>
               
                </div>
              </div>
            </div>
          </div>
          <div class="lower-box">
            <div class="category">{!! $posts->case4_head !!}</div>
            
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <!--End Case Section-->
  
  <!--Testimonial Section-->
  <section class="testimonial-section">
    <div class="auto-container">
      <!--Sec Title-->
      <div class="sec-title">
        <h2>What Clients Saying</h2>
        <div class="title-text">Automate & Simplify The Whole Process</div>
      </div>
      <div class="single-item-carousel owl-carousel owl-theme">
        
        <!--Testimonial Block Two-->
        <div class="testimonial-block-two">
          <div class="inner-box">
            <div class="row clearfix">
              <!--Content Column-->
              <div class="content-column col-lg-7 col-md-7 col-sm-12">
                <div class="inner-column">
                  <div class="text">{!! $posts->client1_text !!}</div>
                  
                </div>
              </div>
              <!--Image Column-->
              <div class="image-column col-lg-5 col-md-5 col-sm-12">
                <div class="inner-column">
                  <div class="image">
                    <img src="/kavi/public/storage/{{$posts->client1_image}}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Testimonial Block Two-->
        <div class="testimonial-block-two">
          <div class="inner-box">
            <div class="row clearfix">
              <!--Content Column-->
              <div class="content-column col-lg-7 col-md-7 col-sm-12">
                <div class="inner-column">
                  <div class="text">{!! $posts->client2_text !!}</div>
                
                </div>
              </div>
              <!--Image Column-->
              <div class="image-column col-lg-5 col-md-5 col-sm-12">
                <div class="inner-column">
                  <div class="image">
                    <img src="/kavi/public/storage/{{$posts->client2_image}}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Testimonial Block Two-->
        <div class="testimonial-block-two">
          <div class="inner-box">
            <div class="row clearfix">
              <!--Content Column-->
              <div class="content-column col-lg-7 col-md-7 col-sm-12">
                <div class="inner-column">
                  <div class="text">{!! $posts->client3_text !!}</div>
                                  </div>
              </div>
              <!--Image Column-->
              <div class="image-column col-lg-5 col-md-5 col-sm-12">
                <div class="inner-column">
                  <div class="image">
                    <img src="/kavi/public/storage/{{$posts->client3_image}}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--End Testimonial Section-->
  
  
  <!--News Section-->
  <section class="news-section">
    <div class="auto-container">
      <!--Sec Title-->
      <div class="sec-title">
        <h2>Latest zemen News</h2>
        <div class="title-text">Automate & Simplify The Whole Process</div>
      </div>
      <div class="row clearfix">
        
        <!--Blocks Column-->
        <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column">
          
            <!--News Block-->
            <div class="news-block">
              <div class="inner-box">
                <ul class="post-info">
                 {!! $posts->news1 !!}
                </ul>
                
              </div>
            </div>
            
            <!--News Block-->
            <div class="news-block">
              <div class="inner-box">
                <ul class="post-info">
                   {!! $posts->news2 !!}
                </ul>
                
              </div>
            </div>
            
            <!--News Block-->
            <div class="news-block">
              <div class="inner-box">
                <ul class="post-info">
                   {!! $posts->news3 !!}
                </ul>
              
              </div>
            </div>
            <div class="news-block">
              <div class="inner-box">
                <ul class="post-info">
                   {!! $posts->news4 !!}
                </ul>
              
              </div>
            </div>
            
          </div>
        </div>
        
        <!--Image Column-->
        <div class="image-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="/kavi/public/storage/{{$posts->news_image}}" alt="" />
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--End News Section-->
  
  <!--Call To Action Section-->
  </div>
  <!--End Call To Action Section-->
  
  @endforeach

  
</div>
<!--End pagewrapper--><!--Scroll to top--><div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
   

  @endsection  
