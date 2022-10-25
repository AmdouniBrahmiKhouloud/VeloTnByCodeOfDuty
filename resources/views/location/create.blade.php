@extends('layouts.base')
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Cycles</span> Locations</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0 text-primary">Make new reservation</h5>
                        <small class="text-muted float-end">Cycles</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('location/store') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Cycles</label>
                                <div class="col-sm-10">
                                    <select name="velo"
                                            class="form-select
                                            @error('velo')
                                             is-invalid
                                             @enderror">
                                        <option value="">Select Cycle</option>
                                        @foreach ($velos as $velo)
                                            <option value="{{$velo->id}}">{{$velo->reference}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                @error('$velo')
                                <div class="alert alert-danger">{{$message }}</div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Start Date</label>
                                <div class="col-sm-10">
                                    <input
                                        name="date"
                                        class="form-control
                                        @error('date')
                                        is-invalid
                                        @enderror"
                                        type="datetime-local"
                                        id="datetime-local-input"
                                    />
                                    @error('date')
                                    <div class="alert alert-danger">{{$message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Hours Number</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input
                                            name="hours"
                                            class="
                                            form-control
                                            @error('hours')
                                            is-invalid
                                            @enderror
                                            "
                                            type="number"
                                            id="datetime-local-input"
                                        />
                                    </div>
                                    @error('hours')
                                    <div class="alert alert-danger">{{$message }}</div>
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
