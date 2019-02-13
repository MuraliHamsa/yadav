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
  
 
  
  @endforeach
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
                                <li><a href="{{URL::to('/')}}/biztalks?id={{$cate->id}}">{!! $cate->name !!}</a></li>
                                
                            </ul>
                            @endforeach
                        </div>
                       </aside>
                       </div> 
                       
                       <div class="col-lg-8 col-md-12 col-sm-12">
                       
                        <img src="https://images.pexels.com/photos/257360/pexels-photo-257360.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="900px" height="500px">
                        </div>
      </div>

  </div>
</div>

            @foreach($service as $catall1)
        <div id="" style="overflow: hidden;" class="col-md-4">
          
           
             {!! $catall1->youtubevideo !!}<br>
           
            <?php 
                 $s = json_decode($catall1->video);
                 
                 $y = $s[0]->download_link;
                ?>
            <video style="width:500px;height:300px" controls> 
              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4">
          </video><br>
                    <br>{!! $catall1->description !!}
                          
            </center><br><br>
                          @if($loop->iteration % 2==0)
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="row">
                              @endif
                         </div>

        @endforeach
  </div>
</div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
  @endsection  
   

