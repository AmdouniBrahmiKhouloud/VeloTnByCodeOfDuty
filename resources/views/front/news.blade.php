@extends('layouts.basefront')
@section('title', 'Cycle')
@section('Content')
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Posts</h1>
            <p class="news_text">Latest Posts from our associations </p>
            <div class="news_section_2 layout_padding">
               <div class="row">
                   @foreach ($posts as $item)
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><img src="/images/{{$item->image}}"  /></div>
                        <div class="padding_15">
                           <h2 class="speed_text">{{$item->title}}</h2>
                           <div class="post_text">Post by : {{$item->association->name}} <span style="float: right;">{{ date('d-M-y', strtotime($item->created_at)) }}</span></div>
                            <p class="long_text">{{$item->details}} </p>

                        </div>
                     </div>
                  </div>

                   @endforeach
               </div>
            </div>
         </div>
      </div>
      <div class="footer_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-sm-12 padding_0">
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q={{$item->association->adress}}" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="call_text"><a href="#"><img src="{{asset('assetsFront/images/map-icon.png')}}"><span class="padding_left_0">Page when looking at its layou</span></a></div>
                <div class="call_text"><a href="#"><img src="{{asset('assetsFront/images/call-icon.png')}}"><span class="padding_left_0">Call Now  +01 123467890</span></a></div>
                <div class="call_text"><a href="#"><img src="{{asset('assetsFront/images/mail-icon.png')}}"><span class="padding_left_0">demo@gmail.com</span></a></div>
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><img src="{{asset('assetsFront/images/fb-icon1.png')}}"></a></li>
                        <li><a href="#"><img src="{{asset('assetsFront/images/twitter-icon.png')}}"></a></li>
                        <li><a href="#"><img src="{{asset('assetsFront/images/linkedin-icon.png')}}"></a></li>
                        <li><a href="#"><img src="{{asset('assetsFront/images/instagram-icon.png')}}"></a></li>
                    </ul>
                </div>
                <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
                <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
        </div>
    </div>
</div>
      <!-- news section end -->
@endsection
