@extends('layouts.basefront')
@section('title', 'Cycle')
@section('Content')
    <!-- contact section start -->

    <style>
        .form-select{
            color: #292929;
            width: 100%;
            height: 55px;
            font-size: 18px;
            padding-bottom : 20px !important;
            background-color: #27275a1a;
            border: 0px;
            border-radius: 30px;
        }
        input{
            background-color:  #27275a1a !important;
        }
        .contact_main{
            margin: 128px auto;
        }
        button{
            background-color: #f7c17b;
            width: 180px;
            height: 70px;
            color: white;
            font-weight: 400;
            font-size: 18px;
            margin-bottom: 64px;
        }
    </style>
    <div class="contact_section layout_padding" style="background-color: white">
        <div class="container">
            <div class="banner_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="image_1"><img src="/images/{{ $velo->image }} " width></div>
                        </div>
                        <div class="col-md-5">
                            <h1 class="banner_taital" style="color: #274e5a">{{ $velo->reference }}</h1>
                            <p class="banner_text" style="color: #274e5a">{{ $velo->description }} </p>
                            <div class="contact_bt">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_main">
                    <h1 class="request_text" style="color: #274e5a">Cycle reservation</h1>
                    <form method="POST" action="/reservation/store/{{$velo->id}}">
                        @csrf
                        <div class="form-group">
                            <input class="email-bt" name="velo"
                                   placeholder="Velo"
                                   value="{{$velo->reference}}"
                                   type="text"
                                   id="datetime-local-input"
                            disabled>
                        </div>

                        <div class="form-group">
                            <input class="email-bt  @error('date')
                                        is-invalid
                                        @enderror " name="date"
                                   placeholder="Reservation date"
                                   type="datetime-local"
                                   id="datetime-local-input">
                        </div>
                        @error('date')
                        <div class="alert alert-danger">{{$message }}</div>
                        @enderror
                        <div class="form-group">
                            <input type="number" class="email-bt  @error('hours')
                                            is-invalid
                                            @enderror" placeholder="hours" name="hours">
                        </div>
                        @error('hours')
                        <div class="alert alert-danger">{{$message }}</div>
                        @enderror
                        <button type="submit">Confirmer </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- contact section end -->
@endsection

