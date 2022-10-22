@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit Evenement</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/updateevenement/{{$evenement->id}}" enctype="multipart/form-data">
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{$evenement->title}}" name="title" id="basic-default-name" placeholder="Title" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Date</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" value="{{$evenement->date}}" name="date" id="basic-default-name" placeholder="Date" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Temp debut</label>
                <div class="col-sm-10">
                  <input type="time" class="form-control" name="time_debut" value="{{$evenement->time_debut}}" id="basic-default-name" placeholder="Temp debut" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Temp fin</label>
                <div class="col-sm-10">
                  <input type="time" class="form-control" value="{{$evenement->time_fin}}" name="time_fin" id="basic-default-name" placeholder="Temp fin" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre de places</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nbr_place" value="{{$evenement->nbr_place}}" id="basic-default-name" placeholder="Nombre de place" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre de participant</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nbr_participant" value="{{$evenement->nbr_participant}}" id="basic-default-name" placeholder="Nombre de participant" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Prix</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="prix" id="basic-default-name" value="{{$evenement->prix}}" placeholder="Prix" />
                </div>
              </div>


              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Descriptiont</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="description" value="{{$evenement->description}}" id="basic-default-name" placeholder="description" />
                    </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                  <div class="col-sm-10">
                    <input type="file" name="image" value="/images/{{$evenement->image}}">
                  </div>
                </div>

              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
