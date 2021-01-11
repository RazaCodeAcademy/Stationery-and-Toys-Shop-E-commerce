{{-- <h1 class="theme-color-bg text-white text-bold py-2">User Header</h1>
<hr> --}}
    <!-- LOADER -->
    {{-- <div id="preloader">
        <div class="loader">
            <img src="{{ url('storage/images/loader.gif') }}" alt="#" />
        </div>
    </div> --}}
    <!-- END LOADER -->

<nav class="navbar sticky-top flex-md-nowrap p-0 header-bg border-bottom py-2">
    <input class="form-control form-control col-xl-3 col-lg-3 col-md-6 col-sm-7 col-6 mr-auto ml-3 search-input" type="text" placeholder=" Search" aria-label="Search">
    <ul class="navbar-nav px-3 flex-row align-items-center">
      <li class="nav-item text-nowrap">
          <i class="fa fa-envelope fa-lg mr-4"></i>
      </li>
      <li class="nav-item icon-parrent">
          <a href="" class="nav-item icon-bullet text-nowrap">
              <i class="fa fa-bell text-white mr-4" aria-hidden="true"></i>
          </a>
      </li>
      <li>
          <img src="{{ asset(Auth::user()->image == true ? ('uploads/employee/images/' . Auth::user()->image) :  '/images/my-image.jpeg') }}" alt="" width="40" height="40" class="rounded-circle mr-4">
      </li>
    </ul>
  </nav>
