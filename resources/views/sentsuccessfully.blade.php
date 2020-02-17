@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4"></div>
    <div class="col-6 text-center">
        <div class="container" >
            <div class="row text-center"  style="margin-top:220px;">
                <div class="col-sm-6 col-sm-offset-3 panel"  style="background-color:#ccdbdf85;">
                    <img src="/place.png" height="150" style="margin:30px" />
                    <h3>{{ $booking->name }}</h3>
                    <p style="font-size:20px;color:#5C5C5C;">
                        Thank you for trusting us.
                    </p>
                    <p style="font-size:20px;color:#5C5C5C;">
                        Your booking has been successfully sent.
                    </p>
                    <a href="/" class="btn btn-success">     Home      </a>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
