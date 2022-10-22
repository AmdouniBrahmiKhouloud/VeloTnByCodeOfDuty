@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add Magasin</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/magasins/store">
                @csrf 
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control  @error('name') is-invalid @enderror"  name="name" id="basic-default-name" placeholder="Name" />
                  @error('name')
                  <div class="error">{{$message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Location</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control  @error('location') is-invalid @enderror"  name="location" id="basic-default-name" placeholder="location" />
                  @error('location')
                  <div class="error">{{ $message }}</div>
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
