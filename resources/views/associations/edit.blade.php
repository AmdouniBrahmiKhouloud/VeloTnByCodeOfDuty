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
            <form method="post" action="/updateAssocaiton/{{$association->id}}">
                @csrf 
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">name</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$association->name}}" class="form-control" name="name" id="basic-default-name" placeholder="Reference" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">category</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$association->category}}" class="form-control" name="category" id="basic-default-name" placeholder="Type" />
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
