@extends('layouts.frontbase')
 
@section('title', 'My Reservations')



@section('content3')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('assets') }}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>My Reservations<i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">My Reservations</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-2">
            <h3>My Reservations</h3>
            <hr>
              
                @include('home.user.usermenu')
             
        </div>
        <div class="col-md-10 block-9 mb-md-5">
            <h3>My Reservations</h3>
            <hr>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Car</th>
                        <th>Name</th>
                        <th>Pick Up</th>
                        <th>Drop off</th>
                        <th>Days</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th style="width: 50px">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $rs)
                    <tr>
                        <td>{{ $rs->id }}</td>
                        <td><a href="{{ route('car', ['id'=>$rs->car_id]) }}">{{ $rs->car->title }}</a></td>
                        <td>{{ $rs->user->name }}</td>
                        <td>{{ $rs->rezlocation }}</td>
                        <td>{{ $rs->returnlocation }}</td>
                        <td>{{ $rs->days }}</td>
                        <td>{{ $rs->amount }}</td>
                        <td>{{ $rs->status }}</td>


                        <td><a href="{{ route ('userpanel.reservationdestroy', ['id'=>$rs->id]) }}" class="btn btn-danger btn-sm" 
                            onclick="return confirm('Are you sure you want to delete this reservation? This action cannot be undone!')">Delete</a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        
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