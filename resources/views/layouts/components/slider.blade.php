
    <div class="slider-wrap">
        <section class="home-slider owl-carousel">

@foreach (App\Slider::all() as $slider)
<div class="slider-item" style="background-image: url('{{ $slider->img }}');">

            <div class="container">
              <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 ">
                  <h1 data-aos="fade-up">{{ $slider->title }}</h1>
                  <p class="mb-5" data-aos="fade-up" data-aos-delay="100">{{ $slider->text }}.</p>
                 {{--  <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p> --}}
                </div>
              </div>
            </div>

          </div>

           
@endforeach




        </section>
      <!-- END slider -->
      </div>
