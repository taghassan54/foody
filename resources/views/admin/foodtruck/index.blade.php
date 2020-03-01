@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">foodtruck Controll</h3>

          <div class="card-tools">
            @if(Auth::user()->role==1)
            @include('admin.foodtruck.create')
            @endif
          </div>
        </div>
        <!-- /.card-header -->
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
                <th>Rating</th>
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
                    <td> {{ $foodtruck->rating }} </td>
                    <td>
                    <form action="{{ Route('foodtruck.destroy',$foodtruck->id) }}" method="POST">
                        @csrf
                        @method('delete')

                        <a href="/foodtruck/{{ $foodtruck->id }}" class="btn btn-primary">show</a>
                    <a href="/foodtruck/{{ $foodtruck->id }}/edit" class="btn btn-info">Edit</a>
                    <button onclick="return confirm('are you sure ?')" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                     </tr>

                @endforeach

<tr>
    <td colspan="8">{{ $foodtrucks->links() }}</td>
</tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
