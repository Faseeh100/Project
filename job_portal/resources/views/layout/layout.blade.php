<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        
		  @include('partials.headlinks')
        @yield("headlinks")
        
        <title>@yield("pagetitle")</title>
   </head>


   <body>
    <!-- Preloader Start -->
    <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    @include('components.header')
    
     @yield('content')

     @include('components.footer')
    </body>
    <!-- JS here -->
	
    @include('partials.footerlinks')
    @yield("footerlinks")
    
</html>