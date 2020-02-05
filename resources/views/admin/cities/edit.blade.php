@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
            <form action="{{ Route('cities.update',$category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                <input type="text" class="form-control" value="{{ $category->name }}" name="name" placeholder="name" required>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-success">save</button>
                       <a class="btn btn-info" href="{{ URL::previous() }}">back</a>
                  
                    </div>

                </form>
        </div>
        </div>
    </div>
    @endsection
