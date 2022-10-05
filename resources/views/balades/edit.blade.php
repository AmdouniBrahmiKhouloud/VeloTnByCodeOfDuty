@extends('base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add Balade</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/updatebalade/{{$balade->id}}">
                @csrf 
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">velo</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{$balade->velo}}" name="velo" id="basic-default-name" placeholder="Velo" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Starting hour</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{$balade->starting_hour}}" name="starting_hour" id="basic-default-name" placeholder="Starting hour" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Ending hour</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{$balade->ending_hour}}"  name="ending_hour" id="basic-default-name" placeholder="Ending hour" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Places</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{$balade->places}}" name="places" id="basic-default-name" placeholder="¨Places" />
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
