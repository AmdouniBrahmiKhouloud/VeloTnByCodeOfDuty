@extends('layouts.base')
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms</span> Locations</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">New Booking</h5>
                        <small class="text-muted float-end">Perkcycle</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('location') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Velo Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="velo" placeholder="velo ..." />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Start Date</label>
                                <div class="col-sm-10">
                                    <input
                                        name="dateDebut"
                                        class="form-control"
                                        type="datetime-local"
                                        value="2021-06-18T12:30:00"
                                        id="datetime-local-input"
                                    />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">End Date</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input
                                            name="dateFin"
                                            class="form-control"
                                            type="datetime-local"
                                            value="2021-06-18T12:30:00"
                                            id="datetime-local-input"
                                        />
                                    </div>
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
