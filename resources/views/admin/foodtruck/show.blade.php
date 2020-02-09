@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-6">
        <ul class="list-group">
        <li class="list-group-item">Name : {{ $foodtruck->name }}</li>
        <li class="list-group-item">Owner : {{ $foodtruck->owner }}</li>
        <li  class="list-group-item">City : {{ $foodtruck->city?$foodtruck->city->name:'' }} </li>
        <li  class="list-group-item"> Fee : {{ $foodtruck->fee }} </li>
        <li  class="list-group-item"> Description : {{ $foodtruck->description }} </li>
        <li  class="list-group-item"> Status : {{ $foodtruck->status }}
            @if ($foodtruck->status==1)
            <a href="#" style="float:right">change to inactive</a> </li>

            @else
            <a href="#" style="float:right">change to active</a> </li>

            @endif
        <li  class="list-group-item"> <img src="{{ $foodtruck->img }}" alt="" width="500" srcset=""> </li>
    </ul>
    <a href="/foodtruck" class="btn btn-info mt-2">back</a>
    </div>

    <div class="col-6">



        <ul class="list-group">
            @include('admin.foodtruck.createmeals')

            <li class="list-group-item active text-center">meals  </li>
           <div class="row">
               @foreach ($foodtruck->meals as $meal)
                   <div class="col-6 mb-1">
                <li class="list-group-item">Name : {{ $meal->name }}</li>
                <li class="list-group-item">price : {{ $meal->price }}</li>
                <li  class="list-group-item">Category : {{ $meal->category?$meal->category->name:'' }} </li>
                <li  class="list-group-item"> Description : {{ $meal->description }} </li>
                <li  class="list-group-item">  SPECIAL MENU  : {{ $meal->is_special }} </li>
                <li  class="list-group-item"> <img src="{{ $meal->img }}" alt="" width="150" height="100" srcset=""> </li>
               <li class="list-group-item">

                <form action="{{ Route('meals.destroy',$meal->id) }}" method="POST">
                    @csrf
                    @method('delete')
                <a href="/meals/{{ $meal->id }}/edit" class="btn btn-info btn-xs">Edit</a>
                <button onclick="return confirm('are you sure ?')" type="submit" class="btn btn-xs btn-danger">Delete</button>
                </form>

               </li>
            </div>
                @endforeach
           </div>

          </ul>

    </div>

    </div>
    @endsection
