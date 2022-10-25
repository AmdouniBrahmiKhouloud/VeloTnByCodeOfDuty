@extends('layouts.base')
@section('title', 'Cycle')
@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h3 class="card-header">Cycle management 🚴‍</h3>
    <div class="card-body">
        <a href="/velo/add"> <button class="btn btn-primary">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUZJREFUSEvNlMFRAkEQRR8RqAc9YwRqBGoEQgaagZ6MgZNmICFgBGIESgTgFQ5qBFqf6rZ6p8adXXGr6Au1u81/3X96ukfH0etYn60GXAEjc+AWeMi5sUkHS2DfRFfAwdYDdoEnq/IcGP6nRS5+bIBXQJCP0hQ2OYNU3DUbQUqAnPjMCEdAEVICXAN3wQaJn9nzFBAkjYpmG4CLu+/qbgKcJoRWAIl4pUU7/noPNoKkFvXN8ziONzaO3ol+NaKK3/IX3k0EKPkFUMUx5PmJQd7tg/5Xyl9DIkAHdgE8A5cmNLZDfAQGwFcANMmvAFTpDnAIeIuqcm7Peh8BTfKzgL2wAhzwZpbkAHX5WYt0iNr1Cu14Xaw6i+ryKwBVq1mXTTE+AU3Vz2SECSrm58b03gSlIwGti1TcC1BRtfmlVZG7nK3edQ74BmGlXxkttufuAAAAAElFTkSuQmCC"/>
                Add Cycle </button></a>
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
