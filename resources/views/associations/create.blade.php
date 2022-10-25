@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add Association</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="/association/store">
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="basic-default-name" placeholder="Name" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">type</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="type" id="basic-default-name" placeholder="type" />
                </div>
              </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Adress</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="adress" id="basic-default-name" placeholder="Adress" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone" id="basic-default-name" placeholder="Phone" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="basic-default-name" placeholder="Email" />
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
