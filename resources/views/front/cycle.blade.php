@extends('layouts.basefront')
@section('title', 'Cycle')
@section('Content')
      <!-- cycle section start -->
      <div class="cycle_section layout_padding">
         <div class="container">
            <h1 class="cycle_taital">Our cycle</h1>
            <p class="cycle_text">It is a long established fact that a reader will be distracted by the </p>
             @foreach ($velos as $item)
                 <div class="cycle_section_3 layout_padding">
                     <div class="row">
                         <div class="col-md-6">
                             <h1 class="cycles_text">{{$item->reference}}</h1>
                             <p class="lorem_text">{{$item->description}}</p>
                             <div class="btn_main">
                                 <div class="buy_bt"><a href="/reservation/{{$item->id}}">Reserve now </a></div>
                                 <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">{{$item->price}}</span></h4>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="box_main_3">
                                 <div class="image_3"><img src="images/{{$item->image}}"></div>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
            <div class="read_btn_main">
               <div class="read_bt"><a href="#">Read More</a></div>
            </div>
         </div>
      </div>
      <!-- cycle section end -->
@endsection
