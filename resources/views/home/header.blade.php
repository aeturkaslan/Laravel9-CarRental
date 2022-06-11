<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Car<span>Book</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      {{-- <div class="dropdown"> //buradaki dropdown classı mouse üstüne getirincce açılmasını sağlıyor.
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">HTML</a></li>
          <li><a href="#">CSS</a></li>
          <li><a href="#">JavaScript</a></li>
        </ul>
      </div> --}}

     
      <nav class="navbar navbar-expand-lg navbar-light ">

        @php
          $maincategories = App\Http\Controllers\HomeController::maincategorylist();
        @endphp
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('references') }}">References</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li> --}}

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              @foreach ($maincategories as $rs)
              <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item " href="#">{{ $rs->title }}</a>
                <div class="custom-menu">
                  <div class="row">
                    {{-- <ul >
                      <li><a href="#">deneme</a></li>
                    </ul> --}}

                    @if (count($rs->children))
                        @include('home.categorytree', ['children' => $rs->children])
                      
                    @endif
                  </div>
                </div>
                @endforeach
              </div>
             
            </li>


            @auth

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
              
              <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item " href="/logoutuser">Logout</a>
                <div class="custom-menu">
                  <div class="row">
                    <ul >
                      <li><a href="#">deneme</a></li>
                    </ul>

                  </div>
                </div>
               
              </div>
             
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="/loginuser">Login</a>
            </li>          
            <li class="nav-item">
              <a class="nav-link" href="/registeruser">Join</a>
            </li>          
            @endauth

            
            <li class="nav-item">
              <a class="nav-link" href="#">Cars</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
      
      {{-- <div class="btn-group">
        @php
          $maincategories = App\Http\Controllers\HomeController::maincategorylist();
        @endphp
        <button type="button" class="btn btn-primary">Home</button>
        <button type="button" class="btn btn-primary">About</button>
        <button type="button" class="btn btn-primary">Services</button>
        <button type="button" class="btn btn-primary">Pricing</button>
        <div class="btn-group dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
             Categories
          </button>
          @foreach ($maincategories as $rs)
          <ul class="dropdown-menu">
            
            <li><a class="dropdown-item" href="#">{{ $rs->title }}</a></li>
          </ul>
          @endforeach
        </div>
        <button type="button" class="btn btn-primary">Cars</button>
        <button type="button" class="btn btn-primary">Blog</button>
        <button type="button" class="btn btn-primary">Contact</button>
      </div>
 --}}
      {{-- <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Cars
            <span class="caret"></span></button>
          <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
      </div> --}}
    </div>
  </nav>

  <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('assets') }}/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">
            <div class="text w-100 text-center mb-md-5 pb-md-5">
              <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
              <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
              <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                      <span class="ion-ios-play"></span>
                  </div>
                  <div class="heading-title ml-5">
                      <span>Easy steps for renting a car</span>
                  </div>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>

   <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
          <div class="row no-gutters">
              <div class="col-md-12	featured-top">
                  <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form action="#" class="request-form ftco-animate bg-primary">
                        <h2>Make your trip</h2>
                              <div class="form-group">
                                  <label for="" class="label">Pick-up location</label>
                                  <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                              </div>
                              <div class="form-group">
                                  <label for="" class="label">Drop-off location</label>
                                  <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
                              </div>
                              <div class="d-flex">
                                  <div class="form-group mr-2">
                          <label for="" class="label">Pick-up date</label>
                          <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
                        </div>
                        <div class="form-group ml-2">
                          <label for="" class="label">Drop-off date</label>
                          <input type="text" class="form-control" id="book_off_date" placeholder="Date">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="label">Pick-up time</label>
                      <input type="text" class="form-control" id="time_pick" placeholder="Time">
                    </div>
                      <div class="form-group">
                        <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
                      </div>
                          </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
                                <div class="row d-flex mb-4">
                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                              <div class="services w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                                <div class="text w-100">
                                  <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                              </div>
                              </div>      
                            </div>
                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                              <div class="services w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                                <div class="text w-100">
                                  <h3 class="heading mb-2">Select the Best Deal</h3>
                                </div>
                              </div>      
                            </div>
                            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                              <div class="services w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                                <div class="text w-100">
                                  <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                </div>
                              </div>      
                            </div>
                          </div>
                          <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
                            </div>
                        </div>
                    </div>
              </div>
        </div>
  </section>