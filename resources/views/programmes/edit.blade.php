@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit Programme</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/updateprogramme/{{$programme->id}}" enctype="multipart/form-data" >
                @csrf 
                <img src="../images/{{$programme->image}}" style="height:200px;width:200px ;margin-left:40%;margin-bottom:3%">              <div class="row mb-3">
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control  @error('name') is-invalid @enderror" value="{{$programme->name}}" name="name" id="basic-default-name" placeholder="Name" />
                      @error('name')
                        <div class="error">{{$message }}</div>
                      @enderror 
                    </div>
                  </div>
              

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{$programme->description}}" name="description" id="basic-default-name" placeholder="Description" />
                  @error('description')
                  <div class="error">{{$message }}</div>
                  @enderror 
                </div>
              </div>

               
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">point de Depart</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control  @error('pointDepart') is-invalid @enderror"  value="{{$programme->pointDepart}}" name="pointDepart" id="basic-default-name" placeholder="point de Depart" />
                  @error('pointDepart')
                  <div class="error">{{$message }}</div>
                  @enderror 
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Distance</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control  @error('distance') is-invalid @enderror" value="{{$programme->distance}}" name="distance" id="basic-default-name" placeholder="Distance" />
                  @error('distance')
                  <div class="error">{{$message }}</div>
                  @enderror 
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" />
                  @error('image')
                  <div class="error">{{$message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
