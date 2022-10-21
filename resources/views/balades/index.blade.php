@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">Balade</h5>
    <a href="/balades/add"> <button class="btn btn-primary"> Add Balade </button></a>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>name</th>
            <th>starting_houre</th>
            <th>ending_houre</th>
            <th>places</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($balades as $item)
                <tr>
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
