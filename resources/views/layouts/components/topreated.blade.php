
    <section class="section ">

        <div class="row">
            <div class="col-12 text-center">

                <div class="row">
                    <div class="col-6">
                        <ul class="list-">
                        <li class="list-group-item">Name : {{ $foodtruck->name }}</li>
                        <li class="list-group-item">Owner : {{ $foodtruck->owner }}</li>
                        <li  class="list-group-item">City : {{ $foodtruck->city?$foodtruck->city->name:'' }} </li>
                        <li  class="list-group-item"> Fee : {{ $foodtruck->fee }} </li>
                        <li  class="list-group-item"> Description : {{ $foodtruck->description }} </li>
                        <li  class="list-group-item"> Status : {{ $foodtruck->status }}</li>
                        <li  class="list-group-item"> Location : <div id='map'></div> </li>

                    </ul>
                    </div>

                    <div class="col-6">

                <h5 class="text-success">available</h5>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 Book Now
</button>

                <h6>Hire the right gourmet food truck for your next catered event</h6>
                <img src="{{ $foodtruck->img }}" alt="" width="500" srcset="">

            </div>
            </div>
            </div>
        </div>

        <div class="clearfix mb-5 pb-5">
          <div class="container-fluid mb-5">
            <div class="row" data-aos="fade">
              <div class="col-md-12 text-center heading-wrap">
                <h2>Special Menu</h2>
              </div>
            </div>
          </div>
          <div class="owl-carousel centernonloop">
            @foreach ($foodtruck->meals()->where('is_special',1)->get() as $meal)
            <a href="#" class="item-dishes" data-aos="fade-right" style="width:615px;height:384px" data-aos-delay="100">
              <div class="text">
                <p class="dishes-price">{{ $meal->price }} </p>
                <h2 class="dishes-heading">{{ $meal->name }}</h2>
              </div>
              <img src="{{ $meal->img }}" alt="" class="img-fluid">
            </a>
            @endforeach

          </div>
        </div>


      </section> <!-- .section -->
  @include('bookingForm')
