@extends('layouts.basefront')
@section('title', 'Cycle')
@section('Content')
    <!-- contact section start -->

    <style>
        input, textarea{
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
                            <div class="image_1"><img src="/images/{{ $evenement->image }} " width></div>
                        </div>
                        <div class="col-md-5">
                            <h1 class="banner_taital" style="color: #274e5a">{{ $evenement->title }}</h1>
                            <p class="banner_text" style="color: #274e5a">{{ $evenement->description }} </p>
                            <div class="contact_bt">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact_main">
                    <h1 class="request_text" style="color: #274e5a">Participation form</h1>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form method="POST" action="/participation/store">
                        @csrf
                        <input type="text"  name="eventID" hidden value={{$evenement->id}}>

                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Nom" name="nom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Prenom" name="prenom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Phone Numbar" name="phone">
                        </div>
                        <div class="form-group">
                            <textarea class="massage-bt" placeholder="Note" rows="5" id="comment" name="note"></textarea>
                        </div>
                        <button type="submit"   >Confirmer </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- contact section end -->
    @endsection


