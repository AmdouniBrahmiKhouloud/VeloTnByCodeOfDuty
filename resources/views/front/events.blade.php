@extends('layouts.basefront')
@section('title', 'Cycle')
@section('Content')
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Evenements</h1>
            <p class="news_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
            <div class="news_section_2 layout_padding">
               <div class="row">
                @foreach ($evenements as $item)
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><img src="/images/{{$item->image}}" ></div>
                        <div class="padding_15">
                           <h2 class="speed_text"> {{$item->title}}</h2>
                           <div class="post_text">Date: <span style="float: right;">{{$item->date}}</span></div>
                           <p class="long_text">{{$item->description}} </p>
                           <div class="contact_bt"><a href="/participer/{{$item->id}}">Participer</a></div>
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
