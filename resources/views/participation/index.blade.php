@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">Participation</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>id</th>
            <th>nom</th>
            <th>date</th>
            <th>prenom</th>
            <th>email</th>
            <th>phone</th>
            <th>note</th>
            <th>event</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($participations as $item)
                <tr>
                    <td> {{$item->id}} </td>
                    <td> {{$item->nom}} </td>
                    <td> {{$item->prenom}} </td>
                    <td> {{$item->email}} </td>
                    <td> {{$item->phone}} </td>
                    <td> {{$item->note}} </td>
                    <td> {{$item->eventID}} </td>
                    <td>test</td>
<td>
                      <a class="" href="/participation/remove/{{$item->id}}"
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
