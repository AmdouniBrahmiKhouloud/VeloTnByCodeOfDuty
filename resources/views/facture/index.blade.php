@extends('layouts.base')
@section('title', 'Events')
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h3 class="card-header">Payment history 💳</h3>
            <div class="card-body">
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th>id</th>
                        <th>Reference</th>
                        <th>Date</th>
                        <th>Montant</th>
                        <th>Paid reservation</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach ($factures as $item)
                        <tr>
                            <td> {{$item->id}} </td>
                            <td> {{$item->reference}} </td>
                            <td> {{$item->datefacturation}} </td>
                            <td> {{$item->montant}} </td>
                            <td>
                                <a class="" href="/listLocationParFacture/{{$item->id}}"
                                ><i class="bx bx-list-check"> </i>Paid Reservation</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
