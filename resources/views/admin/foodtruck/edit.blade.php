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
                        <input type="file" class="form-control" value="{{ $foodtruck->img }}" name="img" placeholder="img" >
                        </div>
                        <div class="form-group">
                        <select  class="form-control" value="{{ $foodtruck->city_id }}" name="city_id" placeholder="city_id" required>
                            @foreach ($Cities as $item)
                        <option value="{{ $item->id }}"> {{ $item->name }} </option>
                            @endforeach
                        </select>
                        </div>

                        <div id='map'></div>

                        <div class="form-group">
                            <textarea  class="form-control" value="" name="description" placeholder="description" required>{{ $foodtruck->description }}</textarea>
                            </div>

                            <input type="hidden" name="long" id="long" value="{{ $foodtruck->long }}">
                            <input type="hidden" name="lat" id="lat" value="{{ $foodtruck->lat }}">


                    <div class="form-group">
                       <button type="submit" class="btn btn-success">save</button>
                       <a class="btn btn-info" href="{{ URL::previous() }}">back</a>

                    </div>

                </form>
        </div>
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
        map.on('click', function(e) {
            // console.log(e)
                $('#long').val(e.lngLat.lng)
                $('#lat').val(e.lngLat.lat)
                marker.setLngLat([e.lngLat.lng,e.lngLat.lat]).addTo(map);
            });
        // code from the next step will go here!

        </script>

    @endsection
