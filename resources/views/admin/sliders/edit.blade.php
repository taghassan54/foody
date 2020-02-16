@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
            <form action="{{ Route('sliders.update',$slider->id) }}"  enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                <input type="text" class="form-control" value="{{ $slider->title }}" name="name" placeholder="name" required>
                    </div>
                    <div class="form-group">
<textarea  class="form-control"  name="text" placeholder="text"  >{{ $slider->text }}</textarea>
</div>
                    <div class="form-group">
                        <input type="file" class="form-control"  name="img" placeholder="name" >
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
