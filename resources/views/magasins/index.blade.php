@extends('layouts.base')
@section('title', 'Magasin')
@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h3 class="card-header">Manage magasin 🏢 </h3>
    <div class="card-body">
        <a href="/magasins/add"> <button class="btn btn-primary"> Add magasin </button></a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>name</th>
            <th>location</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($magasins as $item)
                <tr>
                    <td> {{$item->name}} </td>
                    <td> {{$item->location}} </td>
                    <td>
                        <a class="" href="/editmagasin/{{$item->id}}"
                        ><i class="bx bx-edit-alt me-1"></i></a
                      >
                      <a class="" href="/magasins/remove/{{$item->id}}"
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
