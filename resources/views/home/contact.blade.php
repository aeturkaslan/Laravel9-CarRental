@extends('layouts.frontbase')
 
@section('title', 'Contact |' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('assets') }}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us<i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Contact Us!</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-4">
            <h3>Contact Information</h3>
              <div class="row mb-5">
                <div class="col-md-12">
                    <div class="border w-100 p-4 rounded mb-2 d-flex">
                        <div class="icon mr-3">
                            <span class="icon-map-o"></span>
                        </div>
                      <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>  {{-- {{ $setting->address }} yap!!!! --}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="border w-100 p-4 rounded mb-2 d-flex">
                        <div class="icon mr-3">
                            <span class="icon-mobile-phone"></span>
                        </div>
                      <p><span>Phone:</span> <a href="tel://1234567920">{{ $setting->phone }}</a></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="border w-100 p-4 rounded mb-2 d-flex">
                        <div class="icon mr-3">
                            <span class="icon-envelope-o"></span>
                        </div>
                      <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p> {{-- {{ $setting->smtpemail }} yap!!!! --}}
                    </div>
                </div>
                {!! $setting->contact !!}
              </div>
        </div>
        <div class="col-md-8 block-9 mb-md-5">
            <h3>Contact Form</h3>
            @include('home.messages')
          <form action="{{ route("storemessage") }}" class="bg-light p-5 contact-form" method="post">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Your Name & Surname">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="Subject">
            </div>
            
            <div class="form-group">
              <textarea class="input form-control" name="message" {{-- id="" --}} cols="30" rows="7" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div id="map" class="bg-white"></div>
          </div>
      </div>
    </div>
  </section>

  {{-- <section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('assets') }}/images/about.jpg');">
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
      <div class="heading-section heading-section-white pl-md-5">
          <span class="subheading">CarBook</span>
        <h2 class="mb-4">Our References</h2>

        {!! $setting->references !!}

        <p><a href="#" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
      </div>
            </div>
        </div>
    </div>
</section> --}}



@endsection