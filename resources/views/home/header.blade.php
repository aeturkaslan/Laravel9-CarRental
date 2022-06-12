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
            <li class="nav-item ">
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
                <a class="dropdown-item " href="{{ route('userpanel.index') }}">User Panel</a>
                <a class="dropdown-item " href="{{ route('userpanel.reservations') }}">My Reservations</a>
                <a class="dropdown-item " href="{{ route('userpanel.reviews') }}">My Reviews</a>
                <a class="dropdown-item " href="">Checkout</a>
                <a class="dropdown-item " href="">My Cars</a>
                <a class="dropdown-item " href="/logoutuser">Logout</a>
                {{-- <div class="custom-menu">
                  <div class="row">
                    <ul >
                      <li><a href="#">deneme</a></li>
                    </ul>

                  </div>
                </div> --}}
               
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

            
           {{--  <li class="nav-item">
              <a class="nav-link" href="#">Cars</a>
            </li> --}}
            
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

  