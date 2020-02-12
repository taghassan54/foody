@extends('layouts.admin')

@section('content')


<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
<style>
  body {
    margin: 0;
    padding: 0;
  }

  #map {
    /* {{--  position: absolute;  --}} */
    top: 0;
    bottom: 0;
    height: 300px;
    width: 100%;
  }
</style>



<div class="row">
    <div class="col-6">
        <ul class="list-group">
        <li class="list-group-item">Name : {{ $foodtruck->name }}</li>
        <li class="list-group-item">Owner : {{ $foodtruck->owner }}</li>
        <li  class="list-group-item">City : {{ $foodtruck->city?$foodtruck->city->name:'' }} </li>
        <li  class="list-group-item"> Fee : {{ $foodtruck->fee }} </li>
        <li  class="list-group-item"> Description : {{ $foodtruck->description }} </li>
        <li  class="list-group-item"> Status : {{ $foodtruck->status }}

            <form action="{{ Route('foodtruck.update',$foodtruck->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
            @if ($foodtruck->status==1)
            <input type="hidden" name="status" value="0">

            <button href="#"  class="btn btn-danger" style="float:right">change to inactive</button> </li>
            @else
            <input type="hidden" name="status" value="1">

            <button href="#" class="btn btn-success"  style="float:right">change to active</button> </li>

            @endif
            </form>
        <li  class="list-group-item"> <div id='map'></div> </li>
        <li  class="list-group-item"> <img src="{{ $foodtruck->img }}" alt="" width="500" srcset=""> </li>
    </ul>
    <a href="/foodtruck/{{ $foodtruck->id }}/edit" class="btn btn-info  mt-2">Edit</a>

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



    <script>

        mapboxgl.accessToken = 'pk.eyJ1Ijoic3VzaGFtIiwiYSI6ImNqanAxMHkybDdiemIza3I1Zmp6cHNyZmEifQ.WjMlTsgbvIVtQdmY_AHF_g';

        var map = new mapboxgl.Map({
          container: 'map',
          style: 'mapbox://styles/mapbox/light-v10',
          center: [{{ $foodtruck->long }},{{ $foodtruck->lat }}],
          zoom: 10
        });
        const marker = new mapboxgl.Marker();
        marker.setLngLat([{{ $foodtruck->long }},{{ $foodtruck->lat }}]).addTo(map);
/*         map.on('click', function(e) {
            // console.log(e)
                $('#long').val(e.lngLat.lng)
                $('#lat').val(e.lngLat.lat)
                marker.setLngLat([e.lngLat.lng,e.lngLat.lat]).addTo(map);
            }); */
        // code from the next step will go here!

        </script>


    @endsection
