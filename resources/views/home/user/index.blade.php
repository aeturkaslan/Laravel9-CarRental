@extends('layouts.frontbase')
 
@section('title', 'User Panel')



@section('content3')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('assets') }}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>User Panel<i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">User Panel</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-2">
            <h3>User Menu</h3>
            <hr>
              
                @include('home.user.usermenu')
             
        </div>
        <div class="col-md-10 block-9 mb-md-5">
            <h3>User Profile</h3>
            <hr>
            @include('profile.show')
        
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