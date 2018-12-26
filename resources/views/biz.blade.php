@extends('index')
@section('content')
      
       <div class="page-wrapper">
 
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
    </section><br><br>
    @endforeach
    <!--End Main Slider-->
    <div class="container">

    <ul class="nav nav-pills">

    <li class="active"><a data-toggle="pill" href="#home">{{$cat[0]->name}}</a></li>
    <li><a data-toggle="pill" href="#menu1">{{$cat[1]->name}}</a></li>
    <li><a data-toggle="pill" href="#menu2">{{$cat[2]->name}}</a></li>
    <li><a data-toggle="pill" href="#menu3">{{$cat[3]->name}}</a></li>
    <li><a data-toggle="pill" href="#menu1">{{$cat[4]->name}}</a></li>
    <li><a data-toggle="pill" href="#menu2">{{$cat[5]->name}}</a></li>
    <li><a data-toggle="pill" href="#menu3">{{$cat[6]->name}}</a></li>
  </ul><br>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        @foreach($cat1 as $catall1)
        <div id="" style="overflow: hidden;" class="col-md-3 col-md-offset-1">
          <center> <img src="/kavi/public/storage/{{$catall1->image}}" width="500px" height="500px"><br><br><br>
           
             {!! $catall1->youtubelink !!}<br>
           
            <?php 
                 $s = json_decode($catall1->video);
                 
                 $y = $s[0]->download_link;
                ?>
            <video width="400" height="300" controls> 
              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4">
            
          </video>
                          
            </center><br><br>
                          @if($loop->iteration % 3==0)
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="row">
                              @endif
                         </div>
                        



        @endforeach
    </div>
    <div id="menu1" class="tab-pane fade">
     @foreach($cat2 as $catall2)
        <div id="" style="overflow: hidden;" class="col-md-3 col-md-offset-1">
          <center> <img src="/kavi/public/storage/{{$catall2->image}}" width="500px" height="500px"><br><br><br>
           
             {!! $catall2->youtubelink !!}<br>
           
            <?php 
                 $s = json_decode($catall2->video);
                 
                 $y = $s[0]->download_link;
                ?>
            <video width="400" height="300" controls> 
              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4">
            
          </video>
                          
            </center><br><br>
                          @if($loop->iteration % 3==0)
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="row">
                              @endif
                         </div>
                        



        @endforeach
    </div>
    <div id="menu2" class="tab-pane fade">
     @foreach($cat3 as $catall3)
        <div id="" style="overflow: hidden;" class="col-md-3 col-md-offset-1">
          <center> <img src="/kavi/public/storage/{{$catall3->image}}" width="500px" height="500px"><br><br><br>
           
             {!! $catall3->youtubelink !!}<br>
           
            <?php 
                 $s = json_decode($catall3->video);
                 
                 $y = $s[0]->download_link;
                ?>
            <video width="400" height="300" controls> 
              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4">
            
          </video>
                          
            </center><br><br>
                          @if($loop->iteration % 3==0)
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="row">
                              @endif
                         </div>
                        



        @endforeach
    </div>
    <div id="menu3" class="tab-pane fade">
      @foreach($cat4 as $catall4)
        <div id="" style="overflow: hidden;" class="col-md-3 col-md-offset-1">
          <center> <img src="/kavi/public/storage/{{$catall4->image}}" width="500px" height="500px"><br><br><br>
           
             {!! $catall4->youtubelink !!}<br>
           
            <?php 
                 $s = json_decode($catall4->video);
                 
                 $y = $s[0]->download_link;
                ?>
            <video width="400" height="300" controls> 
              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4">
            
          </video>
                          
            </center><br><br>
                          @if($loop->iteration % 3==0)
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="row">
                              @endif
                         </div>
                        



        @endforeach
    </div>
     <div id="menu4" class="tab-pane fade">
      @foreach($cat5 as $catall5)
        <div id="" style="overflow: hidden;" class="col-md-3 col-md-offset-1">
          <center> <img src="/kavi/public/storage/{{$catall5->image}}" width="500px" height="500px"><br><br><br>
           
             {!! $catall5->youtubelink !!}<br>
           
            <?php 
                 $s = json_decode($catall5->video);
                 
                 $y = $s[0]->download_link;
                ?>
            <video width="400" height="300" controls> 
              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4">
            
          </video>
                          
            </center><br><br>
                          @if($loop->iteration % 3==0)
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="row">
                              @endif
                         </div>
                        



        @endforeach
    </div>
     <div id="menu5" class="tab-pane fade">
      @foreach($cat6 as $catall6)
        <div id="" style="overflow: hidden;" class="col-md-3 col-md-offset-1">
          <center> <img src="/kavi/public/storage/{{$catall6->image}}" width="500px" height="500px"><br><br><br>
           
             {!! $catall6->youtubelink !!}<br>
           
            <?php 
                 $s = json_decode($catall6->video);
                 
                 $y = $s[0]->download_link;
                ?>
            <video width="400" height="300" controls> 
              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4">
            
          </video>
                          
            </center><br><br>
                          @if($loop->iteration % 3==0)
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="row">
                              @endif
                         </div>
                        



        @endforeach
    </div>
     <div id="menu6" class="tab-pane fade">
      @foreach($cat7 as $catall7)
        <div id="" style="overflow: hidden;" class="col-md-3 col-md-offset-1">
          <center> <img src="/kavi/public/storage/{{$catall7->image}}" width="500px" height="500px"><br><br><br>
           
             {!! $catall7->youtubelink !!}<br>
           
            <?php 
                 $s = json_decode($catall7->video);
                 
                 $y = $s[0]->download_link;
                ?>
            <video width="400" height="300" controls> 
              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4">
            
          </video>
                          
            </center><br><br>
                          @if($loop->iteration % 3==0)
                              </div>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="row">
                              @endif
                         </div>
                        



        @endforeach
    </div>
  </div>
</div>
  
 
</div>
  @endsection  
   

