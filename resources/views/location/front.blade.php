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
                <div class="contact_main">
                    <h1 class="request_text" style="color: #274e5a">Cycle reservation</h1>
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <select name="velo" placeholder="Cycle" class="form-select">
                                <option value="">Select Cycle</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input class="email-bt" name="date"
                                   placeholder="Reservation date"
                                   type="datetime-local"
                                   id="datetime-local-input">
                        </div>
                        <div class="form-group">
                            <input type="number" class="email-bt" placeholder="hours" name="hours">
                        </div>
                        <button type="submit">Confirmer </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- contact section end -->
@endsection

