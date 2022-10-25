@extends('layouts.base')

@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Association : List of users</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th>name</th>
                        <th>email</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach ($users as $item)
                        <tr>
                            <td> {{$item->name}} </td>
                            <td> {{$item->email}} </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
