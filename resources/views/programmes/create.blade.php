@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
  
  <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add Programme</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/programmes/store">
                @csrf 
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="basic-default-name" placeholder="Name" />
                    @error('name')
                    <div class="error">{{$message }}</div>
                    @enderror 
                  </div>
                </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control  @error('description') is-invalid @enderror" name="description" placeholder="Description" />
                  @error('description')
                  <div class="error">{{$message }}</div>
                  @enderror 
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">point de Depart</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control  @error('pointDepart') is-invalid @enderror" name="pointDepart"  placeholder="point de Depart" />
                  @error('pointDepart')
                  <div class="error">{{$message }}</div>
                  @enderror 
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Distance</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control  @error('distance') is-invalid @enderror" name="distance" id="basic-default-name" placeholder="Distance" />
                  @error('distance')
                  <div class="error">{{$message }}</div>
                  @enderror 
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
