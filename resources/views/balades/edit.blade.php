@extends('layouts.base')

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
            <form method="POST" action="/updatebalade/{{$balade->id}}" enctype="multipart/form-data">
                @csrf 
                <img src="../images/{{$balade->image}}" style="height:200px;width:200px ;margin-left:40%;margin-bottom:3%">              <div class="row mb-3">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">velo</label>
                  <div class="col-sm-10">
                  <select class="form-control custom-select" multiple name="velo[]">
                  @foreach ($velos as $velo)
                  @if($velo->balade_id === $balade->id)
                    <option value="{{$velo->id}}" selected>{{$velo->reference}}</option>
                  @else
                  <option value="{{$velo->id}}" >{{$velo->reference}}</option>
                  @endif
                  @endforeach   
                  </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">programme</label>
                  <div class="col-sm-10">
                  <select class="form-control custom-select" multiple name="programme[]">
                  @foreach ($programmes as $programme)
                  @if($programme->balade_id === $balade->id)
                  <option value="{{$programme->id}}" selected >{{$programme->name}}</option>
                  @else
                  <option value="{{$programme->id}}">{{$programme->name}}</option>
                  @endif
                  @endforeach   
                  </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$balade->name}}" name="name" id="basic-default-name" placeholder="Name" />
                  </div>
                </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Starting hour</label>
                <div class="col-sm-10">
                  <input type="datetime-local" class="form-control" value="{{$balade->starting_hour}}" name="starting_hour" id="basic-default-name" placeholder="Starting hour" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Ending hour</label>
                <div class="col-sm-10">
                  <input type="datetime-local" class="form-control" value="{{$balade->ending_hour}}"  name="ending_hour" id="basic-default-name" placeholder="Ending hour" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Places</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{$balade->places}}" name="places" id="basic-default-name" placeholder="¨Places" />
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
