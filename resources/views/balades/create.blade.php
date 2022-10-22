@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
  @if (count($velos) === 0)
  <div class="col-xxl">
    <div class="card mb-4">
  <h1>no bicycles available</h1>
    </div></div>
  @else

 

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add Balade</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/balades/store">
                @csrf 
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">velo</label>
                <div class="col-sm-10">
                <select class="form-control custom-select" multiple name="velo[]">
                @foreach ($velos as $velo)
                  <option value="{{$velo->id}}">{{$velo->reference}}</option>
                @endforeach   
                </select>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">programme</label>
                <div class="col-sm-10">
                <select class="form-control custom-select" multiple name="programme[]">
                @foreach ($programmes as $programme)
                  <option value="{{$programme->id}}">{{$programme->name}}</option>
                @endforeach   
                </select>
                </div>
              </div>
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
                <label class="col-sm-2 col-form-label" for="basic-default-name">Starting hour</label>
                <div class="col-sm-10">
                  <input type="datetime-local" class="form-control  @error('starting_hour') is-invalid @enderror" name="starting_hour" id="basic-default-name" placeholder="Starting hour" />
                  @error('starting_hour')
                  <div class="error">{{$message }}</div>
                  @enderror 
                </div>
              </div>

                              
              
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Ending hour</label>
                <div class="col-sm-10">
                  <input type="datetime-local" class="form-control  @error('ending_hour') is-invalid @enderror" name="ending_hour" id="basic-default-name" placeholder="Ending hour" />
                  @error('ending_hour')
                  <div class="error">{{$message }}</div>
                  @enderror 
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Places</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control  @error('places') is-invalid @enderror" name="places" id="basic-default-name" placeholder="Places" />
                  @error('places')
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

    </div> @endif
  </div>
@endsection
