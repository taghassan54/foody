@extends('layouts.app')

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



    {{--  slider section  --}}
    @include('layouts.components.slider')



    {{--  category section  --}}
    {{-- @include('layouts.components.category') --}}


    {{--  top reated section  --}}
    @include('layouts.components.topreated')



    {{--  food trucks section  --}}
    @include('layouts.components.recipes')



    @include('layouts.components.reviews')

    @auth
    @include('layouts.components.chat')
  @endauth
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
