@extends('base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit velo</h5>
          </div>
          <div class="card-body">
            <form method="post" action="/updatevelo/{{$velo->id}}">
                @csrf 
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Reference</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$velo->reference}}" class="form-control" name="reference" id="basic-default-name" placeholder="Reference" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Type</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$velo->type}}" class="form-control" name="type" id="basic-default-name" placeholder="Type" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$velo->price}}" class="form-control" name="price" id="basic-default-name" placeholder="Price" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Color</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$velo->color}}" class="form-control" name="color" id="basic-default-name" placeholder="Color" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Number of places</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$velo->nbr_place}}" class="form-control" name="nbr_place" id="basic-default-name" placeholder="Number of places" />
                </div>
              </div>

              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit"  class="btn btn-primary">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
