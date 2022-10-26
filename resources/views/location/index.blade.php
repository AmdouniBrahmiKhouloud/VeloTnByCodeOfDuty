@extends('layouts.base')
@section('title', 'Location')
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Welcome {{auth()->user()->name}}! 🎉</h5>
                            @if(Auth::user()->role == '0')
                            <p class="mb-4">
                                Your history of your reservations , if you want to add new reservations
                                <span class="fw-bold">new reservations</span>
                            </p>

                            <a href="{{ url('/location/create') }}" class="btn btn-sm btn-outline-primary">New reservation</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="../assets/img/illustrations/man-with-laptop-light.png"
                                height="150"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mb-4">Manage reservations 📇</h3>
        <div class="table-responsive text-nowrap">
            <table class="table card-table">
                <thead>
                <tr>
                    <th>Cycle</th>
                    <th>Cycle Reference</th>
                    <th>Reservation Date</th>
                    <th>hours</th>
                    <th>Price</th>
                    <th>paid</th>
                    @if(auth()->user()->role == '1')
                        <th>User</th>
                    @endif
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($locations as $location)
                    <tr>
                        <td><img src="images/{{$location->velo->image}}" style="height:50px;width:50px"></td>
                        <td>{{$location->velo->reference}}</td>
                        <td>{{$location->date}}</td>
                        <td>{{$location->hours}}</td>
                        <td>{{$location->price }}$ </td>
                        <td>
                            @if($location->isPaid)
                                <span class="badge bg-label-success me-1">  {{ __('Paid') }}</span>
                            @else
                                <span class="badge bg-label-warning me-1"> {{ __('Pending') }}</span>
                            @endif
                        </td>

                        @if(auth()->user()->role == '1')
                            <td>{{$location->user->name}}</td>
                        @endif
                        <td>

                            <a class="" href="/editlocation/{{$location->id}}"
                            ><i class="bx bx-edit-alt me-1"></i></a
                            >
                            <a class="" href="/location/remove/{{$location->id}}"
                            disabled="{{$location->isPaid}}"><i class="bx bx-trash me-1"></i></a
                            >
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
