
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

 @for ($x= 0; $x <= 10; $x++)
 <div class="col-md-6">
    <div class="sched d-block d-lg-flex">
      <div class="bg-image order-2" style="background-image: url('https://rh_marketplace.s3.amazonaws.com/cropped/list/xkYGSVGVQBiFrdqz78s7_bb%20exterior%201.jpg');" data-aos="fade"></div>
      <div class="text order-1">
        <h3>Grilled Caesar salad, shaved reggiano</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
        <p class="text-primary h5"><span style="color:red"> 12.00 SAR </span> for Day</p>
        <button type="submit" class="btn btn-xs btn-info">Order</button>
      </div>

    </div>

    <div class="sched d-block d-lg-flex">
      <div class="bg-image" style="background-image: url('https://rh_marketplace.s3.amazonaws.com/cropped/list/LArgnNEUSbekTRe4mdfh_1825%202.JPG');" data-aos="fade"></div>
      <div class="text order-1">
          <h3>Grilled Caesar salad, shaved reggiano</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
          <p class="text-primary h5"><span style="color:red"> 12.00 SAR </span> for Day</p>
          <button type="submit" class="btn btn-xs btn-info">Order</button>
        </div>

    </div>

  </div>

 @endfor

        </div>
      </section> <!-- .section -->
