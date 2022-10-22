@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add Evenement</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/evenements/store" enctype="multipart/form-data">
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" id="basic-default-name" placeholder="Title" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Date</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="date" id="basic-default-name" placeholder="Date" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Temp debut</label>
                <div class="col-sm-10">
                  <input type="time" class="form-control" name="time_debut" id="basic-default-name" placeholder="Temp debut" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Temp fin</label>
                <div class="col-sm-10">
                  <input type="time" class="form-control" name="time_fin" id="basic-default-name" placeholder="Temp fin" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre de places</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nbr_place" id="basic-default-name" placeholder="Nombre de place" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre de participant</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nbr_participant" id="basic-default-name" placeholder="Nombre de participant" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Prix</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="prix" id="basic-default-name" placeholder="Prix" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Descriptiont</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="description" id="basic-default-name" placeholder="description" />
                </div>
              </div>

              <div class="form-group">
                <input type="file" name="image" >
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
