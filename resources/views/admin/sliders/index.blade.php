@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">sliders Controll</h3>

          <div class="card-tools">

            @include('admin.sliders.create')

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" {{-- style="height: 300px;" --}}>
          <table class="table table-head-fixed">
            <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>title</th>
                <th>text</th>
                <th>image</th>

                <th>controll</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($sliders as $slider)
                <tr class="text-center">
                    <td>{{ $loop->iteration }}</td>
                    <td> {{ $slider->title }} </td>

                    <td> {{ $slider->text }} </td>
                    <td> <img src="{{ $slider->img }}" alt="" width="100" srcset=""> </td>
                    <td>
                    <form action="{{ Route('sliders.destroy',$slider->id) }}" method="POST">
                        @csrf
                        @method('delete')
                    <a href="/sliders/{{ $slider->id }}/edit" class="btn btn-info">Edit</a>
                    <button onclick="return confirm('are you sure ?')" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                     </tr>

                @endforeach
<tr>
    <td colspan="3">{{ $sliders->links() }}</td>
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
