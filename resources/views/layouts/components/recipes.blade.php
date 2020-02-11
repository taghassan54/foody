
    <section class="section bg-light pt-0 bottom-slant-gray">

        <div class="clearfix mb-5 pb-5">
          <div class="container-fluid">
            <div class="row" data-aos="fade">
              <div class="col-md-12 text-center heading-wrap">
                <h2>Our Recipes</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="container">

          <div class="row no-gutters">
            @foreach ($foodtruck->meals as $meal)
                <div class="col-md-6">

                  <div class="sched d-block d-lg-flex">
                    <div class="bg-image order-2" style="background-image: url('{{ $meal->img }}');" data-aos="fade"></div>
                    <div class="text order-1">
                      <h3>Meal Name : {{ $meal->name }}</h3>
                      <small> Category : {{ $meal->category?$meal->category->name:'' }}</small>
                      <p> Description :  {{ $meal->description }}</p>
                      <B>Price : {{ $meal->price }} </B>
                      <p class="deal-item-desc primary-font">  </p>
                    </div>

                  </div>



                </div>


                @endforeach
        </div>


        </div>
      </section> <!-- .section -->

