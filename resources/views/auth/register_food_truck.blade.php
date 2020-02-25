@extends('layouts.app')

@section('content')

<section class="section ">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
  <!-- The Modal -->
  <div class="" id="myModal">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create new food-truck Account</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{ Route('food-truck.register') }}" enctype="multipart/form-data" method="POST">
            @csrf
                @include('admin.foodtruck.fields')


                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a class="btn btn-link" href="/login">
                            already have account ?
                        </a>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-4">
                        <a class="btn btn-link" href="/">
                            {{ __('Back Home') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>



      </div>
    </div>


            </div>
        </div>
    </div>
  </section> <!-- .section -->


@endsection
