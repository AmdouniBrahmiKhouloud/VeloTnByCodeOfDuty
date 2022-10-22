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
      <!-- news section end -->
@endsection
