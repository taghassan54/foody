@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
            <form action="{{ Route('meals.update',$meal->id) }}"  enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                <input type="text" class="form-control" value="{{ $meal->name }}" name="name" placeholder="name" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" value="{{ $meal->price }}" name="price" placeholder="price" required>
                        </div>
                        <div class="form-group">
                            <select  class="form-control"  name="category_id" placeholder="category_id" required>
                                @foreach ($categories as $item)
                            <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                            </select>
                            </div>

                    <div class="form-group">
                        <input type="file" class="form-control"  name="img" placeholder="name" >
                        </div>
                        <div class="form-group">
                            <textarea  class="form-control" value="{{ $meal->description }}" name="description" placeholder="description" ></textarea>
                            </div>
                            <div class="form-group">
                                SPECIAL MENU <input type="checkbox" value="{{ $meal->is_special }}" name="is_special" id="is_special">
                                </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-success">save</button>
                    <a class="btn btn-info" href="/foodtruck/{{ $meal->foodtruck_id }}">back</a>

                    </div>

                </form>
        </div>
        </div>
    </div>
    @endsection
