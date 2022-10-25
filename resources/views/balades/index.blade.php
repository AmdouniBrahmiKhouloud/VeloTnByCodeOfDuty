@extends('layouts.base')
@section('title', 'Walks')
@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h3 class="card-header">Manage Balade 🚵🏻‍</h3>
    <div class="card-body">
        <a href="/balades/add"> <button class="btn btn-primary"> Add Balade </button></a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Starting_houre</th>
            <th>Ending_houre</th>
            <th>Places</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($balades as $item)
                <tr>
                    <td><img src="images/{{$item->image}}" style="height:50px;width:50px"></td>
                    <td> {{$item->name}} </td>
                    <td> {{$item->starting_hour}} </td>
                    <td> {{$item->ending_hour}} </td>
                    <td> {{$item->places}} </td>
                    <td>
                        <a class="" href="/editbalade/{{$item->id}}"
                        ><i class="bx bx-edit-alt me-1"></i></a
                      >
                      <a class="" href="/balades/remove/{{$item->id}}"
                        ><i class="bx bx-trash me-1"></i></a
                      >
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
