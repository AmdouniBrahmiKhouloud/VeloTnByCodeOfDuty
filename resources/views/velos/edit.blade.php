@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">edit velo</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/updatevelo/{{$velo->id}}" enctype="multipart/form-data">
                @csrf 
              
              <img src="../images/{{$velo->image}}" style="height:200px;width:200px ;margin-left:40%">
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
                  <input type="text" value="{{$velo->reference}}" class="form-control @error('reference') is-invalid @enderror" name="reference" id="basic-default-name" placeholder="Reference" />
                  @error('reference')
                  <div class="error">{{$message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$velo->price}}" class="form-control @error('price') is-invalid @enderror" name="price" id="basic-default-name" placeholder="Price" />
                  @error('price')
                  <div class="error">{{$message }}</div>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">description</label>
                <div class="col-sm-10">
                <textarea rows="4" class="form-control" name="description" style="resize:none"> 
                {{$velo->description}}
                </textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Number of places</label>
                <div class="col-sm-10">
                  <input type="text" value="{{$velo->nbr_place}}"  class="form-control @error('nbr_place') is-invalid @enderror" name="nbr_place" id="basic-default-name" placeholder="Number of places" />
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
                  @if($model->id == $velo->model_id)
                  <option value="{{$model->id}}" selected>{{$model->name}}</option>
                  @else
                  <option value="{{$model->id}}">{{$model->name}}</option>
                  @endif
                  @endforeach
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Magasin</label>
                <div class="col-sm-10">
                  <select name="magasin" class="form-select">
                  @foreach ($magasins as $magasin)
                  @if($magasin->id == $velo->magasin_id)
                  <option value="{{$magasin->id}}" selected>{{$magasin->name}}</option>
                  @else
                  <option value="{{$magasin->id}}">{{$magasin->name}}</option>
                  @endif
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
