@extends('layouts.app')

@section('content')
    {{--  slider section  --}}
    @include('layouts.components.slider')


    {{--  category section  --}}
    @include('layouts.components.category')


    {{--  top reated section  --}}
    @include('layouts.components.topreated')



    {{--  food trucks section  --}}
    @include('layouts.components.recipes')

@endsection
