<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
    </style>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="A.Emirhan Türkaslan">
    <link rel="icon" type="image/x-icon" href="@yield("icon")">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
    
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{ asset('assets') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

    @yield("head")
  </head>


    <body>
        @include("home.header")

        @section('sidebar')
            
        @show

        @yield('content1')

        @yield('slider')
 
        {{-- <div class="container"> --}}  {{-- İçerikleri container içine almak için --}}
            @yield('content2')
        </div>

        @yield('content3')

        @include("home.footer")
        @yield('foot')
    </body>
</html>