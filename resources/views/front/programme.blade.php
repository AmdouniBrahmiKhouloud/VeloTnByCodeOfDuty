@extends('layouts.basefront')
@section('title', 'Balade')
@section('Content')
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Programmes</h1>
            <p class="news_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
            <div class="news_section_2 layout_padding">
               <div class="row">
                    @foreach ($programmes as $programme)                
                    <div class="col-sm-4">
                     <div  class="box_main_1" style="margin-bottom: 5%">
                        <div><img src="images/{{$programme->image}}" style="height: 280px ; width: 350px;"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">{{$programme->name}}</h2>
                           {{-- <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p> --}}
                        </div>
                     </div>
                    </div>
                     @endforeach
               </div>
            </div>
         </div>
      </div>
@endsection
