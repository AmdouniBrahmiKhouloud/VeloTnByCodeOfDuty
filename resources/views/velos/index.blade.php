@extends('layouts.base')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">Velo</h5>
    <div>
    <a href="/velo/add"> <button class="btn btn-primary"> Add velo </button></a>
    <a href="/velo/export"> <button class="btn btn-primary"> Export excel</button></a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>image</th>
            <th>Reference</th>
            <th>price</th>
            <th>nbr_place</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($velos as $item)
                <tr>
                    <td><img src="images/{{$item->image}}" style="height:50px;width:50px"></td>
                    <td> {{$item->reference}} </td>
                    <td> {{$item->price}} </td>
                    <td> {{$item->nbr_place}} </td>
                    <td> 
                        <a class="" href="/editvelo/{{$item->id}}"
                        ><i class="bx bx-edit-alt me-1"></i></a
                      >
                      <a class="" href="/velo/remove/{{$item->id}}"
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
