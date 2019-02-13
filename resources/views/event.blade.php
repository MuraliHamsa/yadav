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
  <div class="sidebar-page-container">
      <div class="auto-container">
          <div class="row clearfix">
        
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                  <aside class="sidebar">
            <div class="sidebar-inner">
            
              <!-- Search -->
              <!-- div class="sidebar-widget search-box">
                <form method="post" action="contact.html">
                  <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search Blog ..." required>
                    <button type="submit"><span class="icon fa fa-search"></span></button>
                  </div>
                </form>
              </div> -->
            
              <!--Blog Category Widget-->
              <div class="sidebar-widget sidebar-blog-category">
                <div class="sidebar-title">
                  <h2>Categories</h2>
                </div>
                <ul class="blog-cat">
                   @foreach($cat as $cate)
                            <ul class="blog-cat">
                                <li><a href="{{URL::to('/')}}/event?id={{$cate->id}}">{!! $cate->name !!}</a></li>
                                
                            </ul>
                            @endforeach
                </ul>
              </div>

              <!--Popular Posts-->
              <div class="sidebar-widget popular-posts">
                <div class="sidebar-title">
                  <h2>Recent Posts</h2>
                </div>
                 @foreach($service as $serve)

                <article class="post">
                  <figure class="post-thumb"><a href="{{URL::to('/')}}/about"><img src="/kavi/public/storage/{{$serve->recentpost1_image}}" alt=""></a></figure>
                  <div class="post-info"></div>
                  <div class="text">
                    {!! $serve->recentpost1_text !!}
                  </div>
                </article>
                 <article class="post">
                  <figure class="post-thumb"><a href="{{URL::to('/')}}/about"><img src="/kavi/public/storage/{{$serve->recentpost2_image}}" alt=""></a></figure>
                  <div class="post-info"></div>
                  <div class="text">
                    {!! $serve->recentpost2_text !!}
                  </div>
                </article>

                 <article class="post">
                  <figure class="post-thumb"><a href="{{URL::to('/')}}/about"><img src="/kavi/public/storage/{{$serve->recentpost3_image}}" alt=""></a></figure>
                  <div class="post-info">
                    
                  </div>
                  <div class="text">
                    {!! $serve->recentpost3_text !!}
                  </div>
                </article>

              </div>
              @endforeach

              <!--Archive Post-->
              <div class="sidebar-widget archive-post">
                <div class="sidebar-title">
                  <h2>Archives</h2>
                </div>
                @foreach($arch as $ar)
                <ul class="archive-list">
                  <li><a href="#">{!! $ar->name !!}</a></li>
                  
                </ul>
                @endforeach
              </div>

              <!--Tags-->
              <div class="sidebar-widget popular-tags">
                <div class="sidebar-title">
                  <h2>Tags</h2>
                </div>
                 @foreach($cat as $cate)
                <a href="{{URL::to('/')}}/event?id={{$cate->id}}">{!! $cate->name !!}</a>
                
                 @endforeach
              </div>

              <!--Contact Info Widget-->
              <div class="sidebar-widget contact-info-widget style-two">
                <div class="inner-content">
                  <div class="icon-box">
                    <span class="icon flaticon-telephone"></span>
                  </div>
                  <div class="text">Got any Questions? <br> call us today</div>
                  <div class="number">1-800-369-8527</div>
                  <div class="email">support@zemenconsult.net</div>
                </div>
                <div class="newsletter-box">
                  <h3>Newsletter</h3>
                  <form method="post" action="contact.html">
                    <div class="form-group">
                      <input type="email" name="email-field" value="" placeholder="Your Email ..." required>
                      <button type="submit"><span class="icon fa fa-envelope"></span></button>
                    </div>
                  </form>
                </div>
              </div>
              
            </div>
          </aside>
        </div>
               
                @foreach($service as $serve)
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                  <div class="blog-single">
            <div class="inner-box">
              <div class="image">
                <img src="/kavi/public/storage/{{$serve->eventimage}}" alt="" />
              </div>
              <div class="lower-content">
                <div class="clearfix">
                  <div class="pull-left">
                    <!-- <ul class="post-meta clearfix">
                      <li>SEPtember 23, 2018</li>
                      <li>Consultant</li>
                      <li><span class="icon fa fa-comment-o"></span> 86</li>
                    </ul> -->
                  </div>
                  <div class="pull-right">
                    <ul class="post-meta clearfix">
                     <!--  <li class="pull-right"><span class="icon fa fa-heart-o"></span> 153</li> -->
                    </ul>
                  </div>
                </div>
               <!--  <h2>Isolate your beliefs for better future</h2> -->
                <div class="text">
                  {!! $serve->eventtext  !!}

                  <blockquote>
                    <div class="quote-icon flaticon-two-quotes"></div>
                    <div class="blockquote-text">{!! $serve->eventqoute !!}</div>
                  </blockquote>



                  <p>{!! $serve->some_text !!}</p>
                </div>
                <!--post-share-options-->
               <!--  <div class="post-share-options">
                  <div class="post-share-inner clearfix">
                    <div class="pull-left tags"><span>Tags: </span><a href="#">Marketing</a> <a href="#">Business</a> <a href="#">Consulting</a></div>
                    <ul class="pull-right info-links clearfix">
                      <li><a href="#"><span class="fa fa-share-alt"></span></a>Share This</li>
                    </ul>
                  </div>
                </div> -->
                
              </div>
              
              <!--New Posts-->
                            <div class="new-posts">
                              <div class="clearfix">
                                  
                                    <div class="pull-left prev-post">
                                      <a href="#"> prev article</a>
                                      <h4>{!! $serve->article1 !!}</h4>
                                    </div>
                                    
                                    <div class="pull-right next-post">
                                      <a href="#">next article </a>
                                      <h4>{!! $serve->article2 !!}</h4>
                                    </div>
                                    
                                </div>
                            </div>
                            
                @endforeach
                            <!--Comments Area-->
              <!-- <div class="comments-area">
                <div class="group-title">
                  <h2>Comments</h2>
                </div> -->
                <!--Comment Box-->
                <!-- <div class="comment-box">
                  <div class="comment">
                    <div class="author-thumb"><img src="images/resource/author-4.jpg" alt=""></div>
                    <div class="comment-inner clearfix">
                      <div class="comment-info clearfix"><strong>Maria Davis</strong><div class="comment-time">September 28, 2018 at 10:05 PM</div></div>
                      <div class="text">Voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo beritatis et quasi architecto beatae vitae dicta sed ipsum dui sunt.</div>
                      <a class="comment-reply" href="#"><span class="fa fa-angle-right"></span> Reply</a>
                    </div>
                  </div>
                </div>
 -->
                <!--Comment Box-->
                <!-- <div class="comment-box">
                  <div class="comment">
                    <div class="author-thumb"><img src="images/resource/author-5.jpg" alt=""></div>
                    <div class="comment-inner clearfix">
                      <div class="comment-info clearfix"><strong>Charles Luke</strong><div class="comment-time">September 28, 2018 at 10:05 PM</div></div>
                      <div class="text">Voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo beritatis et quasi architecto beatae vitae dicta sed ipsum dui sunt.</div>
                      <a class="comment-reply" href="#"><span class="fa fa-angle-right"></span> Reply</a>
                    </div>
                  </div>
                </div>

              </div> -->
              <!--End Comments Area-->
              
              <!--Comment Form-->
              <div class="comment-form">
                <div class="group-title">
                  <h2>Post A Reply</h2>
                </div>
                <form method="post" action="contact.html">
                  <div class="row clearfix">
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <input type="text" name="username" placeholder="Your Name" required>
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                      </div>
                    </div>
                    <div class="column col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <textarea name="message" placeholder="Message"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-right">
                    <button class="theme-btn btn-style-five" type="submit" name="submit-form">Post Comment</button>
                  </div>
                </form>
              </div>
              
            </div>
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
 
  
  
 

  @endforeach
<!--End pagewrapper--><!--Scroll to top--><div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
   

  @endsection  
