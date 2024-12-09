@extends('layout.layout')

 @section('content')

<section class="section-hero home-section overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-12">
      <div class="mb-5 text-center">
        <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
        <p>Discover the easiest way to land your dream job with strategic planning, skill development, networking, and persistence.</p>
      </div>
    </div>
  </div>
</div>

<a href="#next" class="scroll-button smoothscroll">
  <span class=" icon-keyboard_arrow_down"></span>
</a>
</section>


<section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Job Listed</h2>
          </div>
        </div>

        <ul class="job-listings mb-5">
          @foreach($jobs as $job)
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="{{route('viewjob', [$job->id])}}"></a>
            <div class="job-listing-logo">
              <img src="images/job_logo_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>{{$job->title}}</h2>
                <strong>{{$job->employer_name}}</strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span> {{$job->location}}
              </div>
              <div class="job-listing-meta">
                <span class="badge badge-danger">{{$job->job_type}}</span>
              </div>
            </div>
             @endforeach
          </li>
        </ul>
    </div>
      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Are you on the hunt for your next career opportunity? Whether you're a recent graduate, a seasoned professional, or seeking a career change, finding the right job can be a daunting task. </p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="{{route('signup_view')}}" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>
@endsection
