<section class="ftco-section ftco-no-pt bg-light">

    <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliderdata as $rs)
            
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img class="d-block w-100" src="{{ Storage::url($rs->image) }}" alt="First slide" style="width: 500px; height:500px" >
          </div>
        
              
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">What we offer</span>
        <h2 class="mb-2">Featured Vehicles</h2>
      </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                  @foreach ($sliderdata as $rs)

                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ Storage::url($rs->image) }}" style="width: 275px; height:150px" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $rs->title }}</h5>
                      <div class="d-flex mb-3">
                        <span class="cat"> {{ $rs->gear }}</span>
                        <p class="price ml-auto"> {{ $rs->price }} ₺<span>/day</span></p>
                    </div>
                      <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                  </div>
                  
                   {{--  <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"  style="background-image: {{ Storage::url($rs->image) }};">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#"> {{ $rs->title }}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat"> {{ $rs->gear }}</span>
                                    <p class="price ml-auto"> {{ $rs->price }} ₺<span>/day</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                            </div>
                        </div>
                    </div> --}}
                      
                  @endforeach


                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>