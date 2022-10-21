@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">List of Associations</h5>
    <a href="/association/add"> <button class="btn btn-primary"> Add Associations </button></a>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>name</th>
            <th>category</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($associations as $item)
                <tr>
                    <td> {{$item->name}} </td>
                    <td> {{$item->category}} </td>
                    <td> 
                        <a class="" href="/editassociation/{{$item->id}}"
                        ><i class="bx bx-edit-alt me-1"></i></a
                      >
                      <a class="" href="/association/remove/{{$item->id}}"
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
