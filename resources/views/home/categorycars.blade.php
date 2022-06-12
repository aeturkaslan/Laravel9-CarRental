@extends('layouts.frontbase')
 
@section('title', $category->title . ' Cars')


@section('content3')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('assets') }}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ $category->title }} <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Choose Your Car - {{ $category->title }}</h1>
        </div>
      </div>
    </div>
  </section>
      

      <section class="ftco-section bg-light">



        {{-- Örnek olması için sliderda yaptığım --}}
        {{-- <div class="container">
            <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
              <span class="subheading">What we offer</span>
            <h2 class="mb-2">Featured Vehicles</h2>
          </div>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                      @foreach ($cars as $rs)
    
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ Storage::url($rs->image) }}" style="width: 275px; height:150px" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $rs->title }}</h5>
                          <div class="d-flex mb-3">
                            <span class="cat"> {{ $rs->gear }}</span>
                            <p class="price ml-auto"> {{ $rs->price }} ₺<span>/day</span></p>
                        </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                            <a href="{{ route('car', ['id'=>$rs->id]) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                      </div>
                      
                          
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
 --}}

        <div class="container">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 " >
        @foreach ($cars as $rs)
        <div class="container col ">
        <div class="row">
        <div class="col-md-4">
        <div class="card" style="width: 18rem; ">
            <img class="card-img-top" src="{{ Storage::url($rs->image) }}" style="width: 275px; height:150px" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $rs->title }}</h5>
              <p class="card-text">{{ $rs->gear }}</p>
              <p class="price ml-auto"> {{ $rs->price }} ₺<span>/day</span></p>
              <p class="d-flex mb-0 d-block">
                <a href="{{ route('car', ['id'=>$rs->id]) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
            </div>
          </div>
        </div>
        </div>       
    </div>  
        @endforeach
    </div>
</div>
        
          <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
  </section>

@endsection