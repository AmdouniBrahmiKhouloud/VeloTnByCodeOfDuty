@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add Post</h5>
          </div>
          <div class="card-body">

              <form method="POST"  action="/poststore/{{$association}}" enctype="multipart/form-data">
                @csrf
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" id="basic-default-name" placeholder="title" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">details</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="details" id="basic-default-name" placeholder="details" />
                </div>
              </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" id="image" >
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
