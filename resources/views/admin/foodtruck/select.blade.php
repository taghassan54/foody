@extends('layouts.admin')

@section('content')

<h4>Owned trucks</h4>
    <div class="card-body table-responsive p-0" {{-- style="height: 300px;" --}}>
        <table class="table table-head-fixed">
          <thead>
            <tr class="text-center">
              <th>ID</th>
              <th>name</th>
              <th>owner</th>
              <th>city</th>
              <th>description</th>
              <th>status</th>
              <th>Image</th>
              <th>controll</th>
            </tr>
          </thead>
          <tbody>

              @foreach ($foodtrucks as $foodtruck)
              <tr class="text-center">
                  <td>{{ $loop->iteration }}</td>
                  <td> {{ $foodtruck->name }} </td>
                  <td> {{ $foodtruck->owner }} </td>
                  <td> {{ $foodtruck->city?$foodtruck->city->name:'' }} </td>
                  <td> {{ $foodtruck->description }} </td>
                  <td> {{ $foodtruck->status }} </td>
                  <td> <img src="{{ $foodtruck->img }}" alt="" width="100" srcset=""> </td>
                  <td>
                  <form action="{{ Route('foodtruck.destroy',$foodtruck->id) }}" method="POST">
                      @csrf
                      @method('delete')
                  <a href="/foodtruck/{{ $foodtruck->id }}" class="btn btn-primary">show</a>
                  <a href="/foodtruck/{{ $foodtruck->id }}/edit" class="btn btn-info">Edit</a>

                  </form>
                  </td>
                   </tr>

              @endforeach
@endsection
