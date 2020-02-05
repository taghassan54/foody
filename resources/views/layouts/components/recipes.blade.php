
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
            @for ($i = 0; $i < 10; $i++)
            <div class="row no-gutters">
                <div class="col-md-6">
                  <div class="sched d-block d-lg-flex">
                    <div class="bg-image order-2" style="background-image: url('user/img/dishes_4.jpg');" data-aos="fade"></div>
                    <div class="text order-1">
                      <h3>Grilled Caesar salad, shaved reggiano</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                      <B>the ingredients</B>
                      <p class="deal-item-desc primary-font"> 4 Pcs Chicken + Fries + Coleslaw + Bun + Cookie + Drink </p>
                    </div>

                  </div>

                  <div class="sched d-block d-lg-flex">
                    <div class="bg-image" style="background-image: url('user/img/dishes_1.jpg');" data-aos="fade"></div>
                    <div class="text">
                      <h3>Spicy Calamari and beans</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                      <B>the ingredients</B>
                      <p class="deal-item-desc primary-font"> 4 Pcs Chicken + Fries + Coleslaw + Bun + Cookie + Drink </p>
                    </div>

                  </div>

                </div>

                <div class="col-md-6">
                  <div class="sched d-block d-lg-flex">
                    <div class="bg-image order-2" style="background-image: url('user/img/dishes_2.jpg');" data-aos="fade"></div>
                    <div class="text order-1">
                      <h3>Bacon wrapped wild gulf prawns</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                      <B>the ingredients</B>
                      <p class="deal-item-desc primary-font"> 4 Pcs Chicken + Fries + Coleslaw + Bun + Cookie + Drink </p>
                    </div>

                  </div>

                  <div class="sched d-block d-lg-flex">
                    <div class="bg-image" style="background-image: url('user/img/dishes_3.jpg');" data-aos="fade"></div>
                    <div class="text">
                      <h3>Seared ahi tuna fillet*, honey-ginger sauce</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                      <B>the ingredients</B>
                      <p class="deal-item-desc primary-font"> 4 Pcs Chicken + Fries + Coleslaw + Bun + Cookie + Drink </p>
                    </div>

                  </div>

                </div>

            @endfor
        </div>


        </div>
      </section> <!-- .section -->

