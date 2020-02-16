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
                        <div class="form-group">
                        <div id='map'></div>
                    </div>
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


        <div class="col-6">



            <section class="section ">
                <div class="container">
                            <div class="card">
                                <div class="card-header text-center">{{ __('update food-truck user ') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('customers.update',$foodtruck->user->id) }}">
                                        @csrf
                                        @method('put')
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $foodtruck->user?$foodtruck->user->name:'' }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $foodtruck->user?$foodtruck->user->email:'' }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <input type="hidden" name="role" value="2">

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('update') }}
                                                </button>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                </section>
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
        @if($foodtruck->long != 0 && $foodtruck->lat !=0)
        marker.setLngLat([{{ $foodtruck->long }},{{ $foodtruck->lat }}]).addTo(map);
        @endif
        map.on('click', function(e) {
            // console.log(e)
                $('#long').val(e.lngLat.lng)
                $('#lat').val(e.lngLat.lat)
                marker.setLngLat([e.lngLat.lng,e.lngLat.lat]).addTo(map);
            });
        // code from the next step will go here!

        </script>

    @endsection
