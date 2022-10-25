@extends('layouts.base')
@section('title', 'Events')
@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h3 class="card-header">Manage Event 🏅</h3>
    <div class="card-body">
        <a href="/evenements/add"> <button class="btn btn-primary"> Add Event </button></a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>id</th>
            <th>title</th>
            <th>date</th>
            <th>time debut</th>
            <th>time fin</th>
            <th>nombre place</th>
            <th>prix</th>
            <th>description</th>
            <th>image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($evenements as $item)
                <tr>
                    <td> {{$item->id}} </td>
                    <td> {{$item->title}} </td>
                    <td> {{$item->date}} </td>
                    <td> {{$item->time_debut}} </td>
                    <td> {{$item->time_fin}} </td>
                    <td> {{$item->nbr_place}} </td>
                    <td> {{$item->prix}} DT</td>
                    <td> {{$item->description}} </td>
                    <td> <img src="/images/{{$item->image}}" width="50" height="50" /> </td>
                    <td>
                        <a class="" href="/editevenement/{{$item->id}}"
                        ><i class="bx bx-edit-alt me-1"></i></a
                      >
                      <a class="" href="/evenement/remove/{{$item->id}}"
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
