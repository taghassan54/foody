
    <section class="section bg-light  top-slant-white bottom-slant-gray">

        <div class="clearfix mb-5 pb-5">
          <div class="container-fluid">
            <div class="row" data-aos="fade">
              <div class="col-md-12 text-center heading-wrap">
                <h2>food trucks</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
            <div class="row no-gutters">
                <form action="#" class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="search">&nbsp;&nbsp;
                        <select name="" id="" class="form-control">
                            @foreach ($cities as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-info">search</button>
                    </div>
                </form>
            </div>
            <a href="#" style="float:right" class="btn btn-secondary">Serch In Google Map</a>
            <br>
            <br>
          <div class="row no-gutters">


 @foreach ($foodtrucks as $foodtruck)
 <div class="col-md-6">
    <div class="sched d-block d-lg-flex">
      <div class="bg-image order-1" style="background-image: url('{{ $foodtruck->img }}');" data-aos="fade"></div>
      <div class="text order-1">
      <a href="/trucks/{{ $foodtruck->id }}"><h3> {{ $foodtruck->name }}</h3></a>
        <p> {{ $foodtruck->description }} </p>
        <p class="text-primary h5"><span style="color:red"> {{ $foodtruck->fee?$foodtruck->fee:0 }} SAR </span> for Day</p>
        <button type="submit" class="btn btn-xs btn-info">Book Now</button>
      </div>

    </div>

{{--     <div class="sched d-block d-lg-flex">
      <div class="bg-image" style="background-image: url('https://rh_marketplace.s3.amazonaws.com/cropped/list/LArgnNEUSbekTRe4mdfh_1825%202.JPG');" data-aos="fade"></div>
      <div class="text order-1">
          <h3>Grilled Caesar salad, shaved reggiano</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
          <p class="text-primary h5"><span style="color:red"> 12.00 SAR </span> for Day</p>
          <button type="submit" class="btn btn-xs btn-info">Book Now</button>
        </div>

    </div> --}}

  </div>

 @endforeach

        </div>
      </section> <!-- .section -->
