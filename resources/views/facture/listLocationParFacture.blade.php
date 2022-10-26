@extends('layouts.base')
@section('title', 'Location')
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Welcome ! 🎉</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mb-4">Paid reservations 📇</h3>
        <div class="table-responsive text-nowrap">
            <table class="table card-table">
                <thead>
                <tr>
                    <th>Cycle Reference</th>
                    <th>Reservation Date</th>
                    <th>hours</th>
                    <th>Price</th>
                    <th>paid</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($locations as $location)
                    <tr>
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
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
