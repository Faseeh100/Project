<header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="{{ route('home') }}">Online JOb </a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
              <li><a href="{{ route('about') }}">About</a></li>
              <li class="">
                <a href="{{ route('list_jobview') }}">Job Listings</a>
              </li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
              <!-- <li class="d-lg-none"><a href="{{route('login_view')}}">Log In</a></li> -->
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">

              <a href="{{route('login_view')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>
