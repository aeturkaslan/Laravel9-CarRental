@extends('layouts.frontbase')
 
@section('title', $data->title)


@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('assets') }}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ $data->category->title }} <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">{{ $data->title }} Details</h1>
        </div>
      </div>
    </div>
  </section>
      

      <section class="ftco-section ftco-car-details">
        @include('home.messages')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    {{-- <div class="img rounded" style="background-image: url('{{ asset('assets') }}/images/bg_1.jpg');"></div> --}}
                    <div class="text-center">
                        <img src="{{ Storage::url($data->image) }}" class="" alt="{{ $data->title }} " style="width: 850px; height:450px">
                    </div>
                    <div class="text text-center">
                        <span class="subheading">{{ $data->category->title }}</span>
                        <h2>{{ $data->title }}</h2>
                        @php
                          $average = $data->comment->average('rate');
                        @endphp
                        <p>This car has been rated </p> <i class="ion-ios-star  ">{{ number_format($average, 1) }}/5 stars!</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Price
                          <span>{{ $data->price }}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div> --}}
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Transmission
                          <span>{{ $data->gear }}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Seats
                          <span>{{ $data->seats }} Seats</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Luggage
                          <span>{{ $data->luggage }} Bags</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Fuel
                          <span>{{ $data->fuel }}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                      <div class="bd-example bd-example-tabs">
                          <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                              <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                              </li>
                            </ul>
                          </div>

                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                              <div class="row">
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>

                          <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>{!! $data->detail !!}</p>
                                  
                          </div>

                          <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                     <div class="col-md-7">
                                         <h3 class="head">{{-- 23 --}} {{ $data->comment->count('id') }} Review(s) For This Car</h3>

                                         {{-- All Reviews --}}

                                         @foreach ($reviews as $rs)
                                             
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url('{{ asset('assets') }}/images/person_1.png')"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">{{ $rs->user->name }}</span>
                                                     <span class="text-right">{{ $rs->created_at }}</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star  ">{{ ($rs->rate) }} Stars</i>
                                                         {{-- <i class="ion-ios-star @if ($rs->rate<2) -o empty @endif"></i>
                                                         <i class="ion-ios-star @if ($rs->rate<3) -o empty @endif"></i>
                                                         <i class="ion-ios-star @if ($rs->rate<4) -o empty @endif"></i>                                                 
                                                         <i class="ion-ios-star @if ($rs->rate<5) -o empty @endif"></i> --}}
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <h4>{{ $rs->subject }}</h4>
                                                 <p>{{ $rs->review }}</p>
                                             </div>
                                         </div>
                                         @endforeach
                                     </div>





                                     {{-- Rating & Review --}}
                                     <div class="col-md-5">
                                         <div class="rating-wrap">
                                             <h3 class="head">Give a Review</h3>
                                             <form action="{{ route("storecomment") }}" class="bg-light p-5 contact-form" method="post">
                                                @csrf
                                                <input type="hidden" class="form-control" name="car_id" value="{{ $data->id }}">
                                                <div class="form-group">
                                                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                                                </div>
                                                
                                                <div class="form-group">
                                                  <textarea class="input form-control" name="review" {{-- id="" --}} cols="30" rows="7" placeholder="Your Review"></textarea>
                                                </div>
                                                <h5>Rate your experience!</h5>
                                                <fieldset class="rating">
                                                    <input type="radio" id="star5" name="rate" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
{{--                                                     <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Very Good - 4.5 stars"></label> --}}
                                                    <input type="radio" id="star4" name="rate" value="4" /><label class = "full" for="star4" title="Good - 4 stars"></label>
                                                    {{-- <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label> --}}
                                                    <input type="radio" id="star3" name="rate" value="3" /><label class = "full" for="star3" title="Normal - 3 stars"></label>
                                                    {{-- <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Normal - 2.5 stars"></label> --}}
                                                    <input type="radio" id="star2" name="rate" value="2" /><label class = "full" for="star2" title="Bad - 2 stars"></label>
                                                    {{-- <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Bad - 1.5 stars"></label> --}}
                                                    <input type="radio" id="star1" name="rate" value="1" /><label class = "full" for="star1" title="Horrible - 1 star"></label>
                                                   {{--  <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Horrible - 0.5 stars"></label> --}}
                                                </fieldset>

                                                @auth
                                                <div class="form-group">
                                                    <input type="submit" value="Send Review" class="btn btn-primary py-3 px-5">
                                                </div>
                                                @else
                                                <a href="/login" class="btn btn-primary py-3 px-5">To submit your review, please log in.</a>
                                                @endauth

                                                

                                              </form>

                                              

                                            
                                             {{-- <div class="wrap">
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (98%)
                                                     </span>
                                                     <span>20 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (85%)
                                                     </span>
                                                     <span>10 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (70%)
                                                     </span>
                                                     <span>5 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (10%)
                                                     </span>
                                                     <span>0 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (0%)
                                                     </span>
                                                     <span>0 Reviews</span>
                                                 </p>
                                             </div> --}}
                                         </div>
                                     </div>
                                 </div>
                          </div>
                        </div>
                      </div>
            </div>
              </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt">
      <div class="container">
          <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Choose Car</span>
          <h2 class="mb-2">Related Cars</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Cheverolet</span>
                              <p class="price ml-auto">$500 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-2.jpg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Subaru</span>
                              <p class="price ml-auto">$500 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-3.jpg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Cheverolet</span>
                              <p class="price ml-auto">$500 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
      </div>
      </div>
  </section>
	
@endsection