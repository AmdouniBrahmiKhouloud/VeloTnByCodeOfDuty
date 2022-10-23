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
            <th>type</th>
              <th>email</th>
              <th>adress</th>
              <th>phone</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($associations as $item)
                <tr>
                    <td> {{$item->name}} </td>
                    <td> {{$item->type}} </td>
                    <td> {{$item->email}} </td>
                    <td> {{$item->adress}} </td>
                    <td> {{$item->phone}} </td>

                    <td>
                        <a class="" href="/associationaddMember/{{$item->id}}"
                        ><i class="bx bx-add-to-queue"></i></a>

                        <a class="" href="/listUsersPerAsssociation/{{$item->id}}"
                        ><i class="bx bx-list-check"></i></a>

                        <a class="" href="/editassociation/{{$item->id}}"
                        ><i class="bx bx-edit-alt me-1"></i></a
                      >
                      <a class="" href="/association/remove/{{$item->id}}"
                        ><i class="bx bx-trash me-1"></i></a
                      >
                        <a class="" href="/postadd/{{$item->id}}"
                        ><i class="bx bxs-image-add me-1"></i></a
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
