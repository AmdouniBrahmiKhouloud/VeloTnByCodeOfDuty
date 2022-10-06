@extends('base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">Evenement</h5>
    <a href="/evenements/add"> <button class="btn btn-primary"> Add Evenement </button></a>
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
            <th>nombre participant</th>
            <th>prix</th>
            <th>description</th>
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
                    <td> {{$item->nbr_participant}} </td>
                    <td> {{$item->nbr_place}} </td>
                    <td> {{$item->prix}} </td>
                    <td> {{$item->description}} </td>
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
