

  <style>
      .rating {
    overflow: hidden;
    display: inline-block;
    font-size: 0;
    position: relative;
}
.rating-input {
    float: right;
    width: 16px;
    height: 16px;
    padding: 0;
    margin: 0 0 0 -16px;
    opacity: 0;
}
.rating:hover .rating-star:hover,
.rating:hover .rating-star:hover ~ .rating-star,
.rating-input:checked ~ .rating-star {
    background-position: 0 0;
}
.rating-star,
.rating:hover .rating-star {
    position: relative;
    float: right;
    display: block;
    width: 16px;
    height: 16px;
    background: url('https://home.et.utwente.nl/slootenvanf/wp-content/plugins/fvs-peer-review/img/star.png') 0 -16px;
}

  </style>
  <section class="section bg-light pt-0 bottom-slant-gray">

        <div class="clearfix mb-5 pb-5">
          <div class="container-fluid">
            <div class="row" data-aos="fade">
              <div class="col-md-12 text-center heading-wrap">
                <h2>Rating and reviews</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="container">

          <div class="row no-gutters">

            <div class="col-md-12">

                <div class="sched d-block d-lg-flex">
                  <div class="text order-1" style="width:100%">
                    @auth
                    <form action="{{ Route('reviews.store') }}" method="post">
                        @csrf
                                <div class="form-group">
                            <textarea name="review" id="review" cols="30" rows="10" class="form-control" required></textarea>
                                </div>

                                    <span class="rating">
                                          <input type="radio" class="rating-input" id="rating-input-1-5" value="5" name="rating"/>
                                          <label for="rating-input-1-5" class="rating-star"></label>
                                          <input type="radio" class="rating-input" id="rating-input-1-4" value="4" name="rating"/>
                                          <label for="rating-input-1-4" class="rating-star"></label>
                                          <input type="radio" class="rating-input" id="rating-input-1-3" value="3" name="rating"/>
                                          <label for="rating-input-1-3" class="rating-star"></label>
                                          <input type="radio" class="rating-input" id="rating-input-1-2" value="2" name="rating"/>
                                          <label for="rating-input-1-2" class="rating-star"></label>
                                          <input type="radio" class="rating-input" id="rating-input-1-1" value="1" name="rating"/>
                                          <label for="rating-input-1-1" class="rating-star"></label>
                                      </span>
                                    <input type="hidden" name="foodtruck_id" value="{{ $foodtruck->id }}">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                        </form>
                    @endauth
                  </div>

                </div>
                <br>
                <hr>
                <br>
            </div>

            <B>Stars : {{ $foodtruck->stars }} - {{ $foodtruck->rating }} </B>
            <br>
<hr>
<br>
            @foreach ($foodtruck->reviews as $review)
                <div class="col-md-12">

                  <div class="sched d-block d-lg-flex">
                    <div class="text order-1">
             <h6>User Name : {{ $review->user?$review->user->name:'unknown' }}</h6>
                      <p> Review : {{ $review->review }}</p>
                      <B>Stars :  {{ $review->stars }} </B>
                    </div>

                  </div>



                </div>


                @endforeach
        </div>


        </div>
      </section> <!-- .section -->

@section('js')
<script>
    $( document ).ready(function() {
	$( "input.rating-input" ).click(function() {
		name=$(this).attr('name');
		$("input[name='"+name+"']").val(""); // remove value from all radio's (with this name)
		$("input[name='"+name+"']:checked").val($(this).attr('id')); // add value to checked radio
	});
});

</script>
@endsection
