{{-- <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item " href="#">My Profile</a>
    <a class="dropdown-item " href="#">My Reservations</a>
    <a class="dropdown-item " href="#">My Reviews</a>
    <a class="dropdown-item " href="#">My Cars</a>
    <a class="dropdown-item " href="/logoutuser">Logout</a>
    <div class="custom-menu">
      <div class="row">
        <ul >
          <li><a href="#">deneme</a></li>
        </ul>

      </div>
    </div>
   
  </div> --}}

  <div class="row ">
    <div class="col-md-12">
        <div class="border w-100 p-4 rounded mb-2 d-flex">
            <div>
                <span></span>
            </div>
          <a href="{{ route('userpanel.index') }}"><p>My Profile</p></a>
        </div>
    </div>
  </div>
  
  <div class="row ">
    <div class="col-md-12">
        <div class="border w-100 p-4 rounded mb-2 d-flex">
            <div>
                <span></span>
            </div>
          <a href="{{ route('userpanel.reservations') }}"><p>My Reservations</p></a>
        </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-12">
        <div class="border w-100 p-4 rounded mb-2 d-flex">
            <div>
                <span></span>
            </div>
          <a href="{{ route('userpanel.reviews') }}"><p>My Reviews</p></a>
        </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-12">
        <div class="border w-100 p-4 rounded mb-2 d-flex">
            <div>
                <span></span>
            </div>
          <a href=""><p>Checkout</p></a>
        </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-12">
        <div class="border w-100 p-4 rounded mb-2 d-flex">
            <div>
                <span></span>
            </div>
          <a href=""><p>My Cars</p></a>
        </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-12">
        <div class="border w-100 p-4 rounded mb-2 d-flex">
            <div>
                <span></span>
            </div>
          <a href="/logoutuser"><p>Logout</p></a>
        </div>
    </div>
  </div>
