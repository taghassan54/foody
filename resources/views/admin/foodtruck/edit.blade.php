@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
            <form action="{{ Route('foodtruck.update',$foodtruck->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $foodtruck->name }}" name="name" placeholder="name" required>
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" value="{{ $foodtruck->owner }}" name="owner" placeholder="owner" required>
                        </div>

                        <div class="form-group">
                        <input type="file" class="form-control" value="{{ $foodtruck->img }}" name="img" placeholder="img" required>
                        </div>
                        <div class="form-group">
                        <select  class="form-control" value="{{ $foodtruck->city_id }}" name="city_id" placeholder="city_id" required>
                            @foreach ($Cities as $item)
                        <option value="{{ $item->id }}"> {{ $item->name }} </option>
                            @endforeach
                        </select>
                        </div>


                        <div class="form-group">
                            <textarea  class="form-control" value="" name="description" placeholder="description" required>{{ $foodtruck->description }}</textarea>
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
