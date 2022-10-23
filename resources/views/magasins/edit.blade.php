@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit Magasin</h5>
          </div>
          <div class="card-body">
            <form method="post" action="/updatemagasin/{{$magasin->id}}">
                @csrf 
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$magasin->name}}" class="form-control" name="name" id="basic-default-name" placeholder="Reference" />
                  @error('name')
                  <div class="error">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Location</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$magasin->location}}" class="form-control" name="location" id="basic-default-name" placeholder="Type" />
                  @error('location')
                  <div class="error">{{ $message }}</div>
                  @enderror
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
