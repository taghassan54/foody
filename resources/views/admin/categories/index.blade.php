@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">categories Controll</h3>

          <div class="card-tools">

            @include('admin.categories.create')

          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" {{-- style="height: 300px;" --}}>
          <table class="table table-head-fixed">
            <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>name</th>

                <th>controll</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($categories as $category)
                <tr class="text-center">
                    <td>{{ $loop->iteration }}</td>
                    <td> {{ $category->name }} </td>
                    <td>
                    <form action="{{ Route('category.destroy',$category->id) }}" method="POST">
                        @csrf
                        @method('delete')
                    <a href="/category/{{ $category->id }}/edit" class="btn btn-info">Edit</a>
                    <button onclick="return confirm('are you sure ?')" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                     </tr>

                @endforeach
<tr>
    <td colspan="3">{{ $categories->links() }}</td>
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
