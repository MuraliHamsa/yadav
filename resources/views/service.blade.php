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
            
            <div class="slide" style="background-image:url('/kavi/public/storage/{{$posts->banner_image}}')">
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
  
 
  
  @endforeach

  
</div>
 <div class="sidebar-page-container">
      <div class="auto-container">
          <div class="row clearfix">
        
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                  <aside class="sidebar">
            
            <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                          @foreach($cat as $cate)
                            <ul class="blog-cat">
                                <li><a href="{{URL::to('/')}}/service?id={{$cate->id}}">{!! $cate->name !!}</a></li>
                                
                            </ul>
                            @endforeach
                        </div>
                        @foreach($service as $serve)
                        <!--Testimonial Widget-->
                        <div class="sidebar-widget testimonial-widget">
                          <div class="inner-widget">
                            <div class="single-item-carousel owl-carousel owl-theme">
                              
                              <!--Testimonial Block Four-->
                              <div class="testimonial-block-four">
                                <div class="inner-box">
                      <div class="text">{!! $serve->blog1_text !!}</div>
                      <div class="author-info">
                        <div class="info-inner">
                          <div class="image"><img src="/kavi/public/storage/{{$serve->blog1_image}}" alt="" /></div>
                         
                          <div class="quote-icon flaticon-right-quote-sign"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                            
                              <!--Testimonial Block Four-->
                              <div class="testimonial-block-four">
                                <div class="inner-box">
                      <div class="text">{!! $serve->blog2_text !!}</div>
                      <div class="author-info">
                        <div class="info-inner">
                          <div class="image"><img src="/kavi/public/storage/{{$serve->blog2_image}}" alt="" /></div>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                            
                              <!--Testimonial Block Four-->
                              <div class="testimonial-block-four">
                                <div class="inner-box">
                      <div class="text">{!! $serve->blog3_text !!}</div>
                      <div class="author-info">
                        <div class="info-inner">
                          <div class="image"><img src="/kavi/public/storage/{{$serve->blog3_image}}" alt="" /></div>
                        
                          <div class="quote-icon flaticon-right-quote-sign"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                              
                </div>
              </div>
            </div>
            @endforeach
            <!--Brochure Widget-->
                        <div class="sidebar-widget brochure-widget">
                          <div class="widget-content">
                              <h2>Downloads</h2>
                                @foreach($pdf as $pdfs)
                                <?php 
                                $s = json_decode($pdfs->pdffile);
                                  $y = $s[0]->download_link;
                                  $z = $s[0]->original_name;
                                  
                                ?>
                                <ul class="brouchers">
                                  <li><a href="http://localhost/kavi/public/storage/{{$y}}"><i class="fa fa-file-pdf-o" style="font-size:15px;color:#1d79e0">{!! $z !!}</i></a></li>
                                
                                </ul>
                                @endforeach
                            </div>
                        </div>
                        <!--End Brochure Widget-->
                        
                        <!--Contact Info Widget-->
                        
            
          </aside>
        </div>
                @foreach($service as $serve)
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                  <div class="services-single">
            <div class="inner-box">
              <div class="image">
                <img src="/kavi/public/storage/{{$serve->image}}" alt="" />
              </div>
              <div class="lower-content">
                
                <div class="text">
                  <div class="two-column">
                    <div class="row clearfix">
                      <div class="column col-lg-6 col-md-6 col-sm-12">
                        
                            <div class="text">{!! $serve->system_benifits !!}</div>
                       
                          
                       

                        
                      </div>
                      <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="image">
                          <img src="/kavi/public/storage/{{$serve->benifit_image}}" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                 
                  <p>{!! $serve->analysis !!} </p>
                </div>
                <div class="blocks-outer row clearfix">
                
                  <!--Services Block Five-->
                  <div class="services-block-five col-lg-6 col-md-6 col-sm-12">
                    <div class="block-inner">
                      <div class="icon-box">
                        <span class="icon flaticon-path"></span>
                      </div>
                      
                      <div class="text">{!! $serve->analysis1 !!}</div>
                    </div>
                  </div>
                  
                  <!--Services Block Five-->
                  <div class="services-block-five col-lg-6 col-md-6 col-sm-12">
                    <div class="block-inner">
                      <div class="icon-box">
                        <span class="icon flaticon-line-graph"></span>
                      </div>
                     
                      <div class="text">{!! $serve->analysis2 !!}</div>
                    </div>
                  </div>
                  
                  <!--Services Block Five-->
                  <div class="services-block-five col-lg-6 col-md-6 col-sm-12">
                    <div class="block-inner">
                      <div class="icon-box">
                        <span class="icon flaticon-speaker"></span>
                      </div>
                     
                      <div class="text">{!! $serve->analysis3 !!}</div>
                    </div>
                  </div>
                  
                  <!--Services Block Five-->
                  <div class="services-block-five col-lg-6 col-md-6 col-sm-12">
                    <div class="block-inner">
                      <div class="icon-box">
                        <span class="icon flaticon-handshake"></span>
                      </div>
                     
                      <div class="text">{!! $serve->analysis4 !!}</div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </div>
<!--End pagewrapper--><!--Scroll to top--><div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
  @endsection  
   

