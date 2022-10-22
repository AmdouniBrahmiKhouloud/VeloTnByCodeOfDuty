@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add velo</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/velo/store" enctype="multipart/form-data">
                @csrf 

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" />
                  @error('image')
                  <div class="error">{{$message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Reference</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('reference') is-invalid @enderror" name="reference" id="basic-default-name" placeholder="Reference" />
                  @error('reference')
                  <div class="error">{{$message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="basic-default-name" placeholder="Price" />
                  @error('reference')
                  <div class="error">{{$message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Color</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('color') is-invalid @enderror" name="color" id="basic-default-name" placeholder="Color" />
                  @error('color')
                  <div class="error">{{$message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Number of places</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('nbr_place') is-invalid @enderror" name="nbr_place" id="basic-default-name" placeholder="Number of places" />
                  @error('nbr_place')
                  <div class="error">{{$message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Model</label>
                <div class="col-sm-10">
                  <select name="model" class="form-select">
                  @foreach ($models as $model)
                  <option value="{{$model->id}}">{{$model->name}}</option>
                  @endforeach
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Magasin</label>
                <div class="col-sm-10">
                  <select name="magasin" class="form-select">
                  @foreach ($magasins as $magasin)
                  <option value="{{$magasin->id}}">{{$magasin->name}}</option>
                  @endforeach
                  </select>
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
