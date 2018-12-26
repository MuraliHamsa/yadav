@extends('index')
@section('content')
      
        <br><br>
        @foreach($post as $posts)
        <div class="container">
            <div class="row">
                
                 <div class="col-sm-2">
                    <img src="/kavi/public/storage/{{$posts->image}}" style="width:100%">
                    <span>{!! $posts->title !!}</span>
                     
                 </div>
            <div class="col-sm-5">
                <p>{!! $posts->blog !!}</p>
            </div>
              <?php 
                 $s = json_decode($posts->video);
                 
                 $y = $s[0]->download_link;
                ?>
            <div class="col-sm-5">   
            <video width="320" height="240" controls> 
              <source src="http://localhost/kavi/public/storage/{{$y}}" type="video/mp4">
            
          </video>
        </div>
    </div>
            </div>
        @endforeach

  @endsection  
