@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">List of models</h5>
    <div>
    <a href="/models/add"> <button class="btn btn-primary"> Add Model </button></a>
    <a href="/models/export"> <button class="btn btn-primary"> Export Excel</button></a>

    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($model_Velos as $item)
                <tr>
                    <td> {{$item->name}} </td>
                    <td> 
                        <a class="" href="/editmodel/{{$item->id}}"
                        ><i class="bx bx-edit-alt me-1"></i></a
                      >
                      <a class="" href="/models/remove/{{$item->id}}"
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
