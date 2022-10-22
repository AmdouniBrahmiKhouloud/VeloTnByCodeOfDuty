@extends('layouts.base')

@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Affect users to the Association</h5>

                    <form action="{{ route('SearchMembersFilter', [$association]) }}" method="GET" >

                <div class="input-group mb-3">
                    <input type="search" class="form-control" name="search" placeholder="Search By Name or Email" >
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                        <button class="btn btn-danger" type="submit">Reset</button>
                    </div>
                </div>
            </form>

            <br>
            <br>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach ($users as $item)
                        <tr>
                            <td> {{$item->name}} </td>
                            <td> {{$item->email}} {{$item->association_id}} </td>
                            @empty ($item->association_id)
                            <td>
                                <a class="" href="/addSelectedUserToAssociation/{{$association}}/{{$item->id}}"
                                ><i class="bx bx-add-to-queue"></i></a>
                            </td>
                            @endempty

                            @isset ($item->association_id)
                                <td>
                                    <a
                                    ><i class="bx bx-message-alt-error"></i></a>
                                </td>
                            @endisset

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
