@extends('layouts.base')
@section('title', 'Programmes')
@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h3 class="card-header">Manage Programmes 🆕</h3>
    <div class="card-body">
        <a href="/programmes/add"> <button class="btn btn-primary"> Add Programme </button></a>
        <a href="/programmes/export"> <button class="btn btn-primary"> Export excel</button></a>
    <a href="/programmes/export_pdf"> <button class="btn btn-primary"> Export pdf</button></a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="table-light">
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Nescription</th>
            <th>PointDepart</th>
            <th>Distance</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($programmes as $item)
                <tr>
                    <td><img src="images/{{$item->image}}" style="height:50px;width:50px"></td>
                    <td> {{$item->name}} </td>
                    <td> {{$item->description}} </td>
                    <td> {{$item->pointDepart}} </td>
                    <td> {{$item->distance}} </td>
                    <td>
                        <a class="" href="/editprogramme/{{$item->id}}"
                        ><i class="bx bx-edit-alt me-1"></i></a
                      >
                      <a class="" href="/programmes/remove/{{$item->id}}"
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
