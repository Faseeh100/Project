@extends('layout.layout')

 @section('content')

 <section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('images/hero_1.jpg')}});" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Product Designer</h1>
            <div class="custom-breadcrumbs">
              <a href="{{route('home')}}">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Product Designer</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="border p-2 d-inline-block mr-3 rounded">
                <img src="{{asset('images/job_logo_1.jpg')}}" alt="Image">
              </div>
              <div>
                <h2>{{$jobs->title}}</h2>
                <div>

                  <span class="m-2"><span class="icon-room mr-2"></span>{{$jobs->location}}</span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{$jobs->job_type}}</span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-6">
                <a href="{{route('postjob',[$jobs->id])}}" class="btn btn-block btn-primary btn-md">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <figure class="mb-5"><img src="{{asset('images/job_single_img_1.jpg')}}" alt="Image" class="img-fluid rounded"></figure>
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
              <p>{{$jobs->description}}</p>
            </div>
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Requirements</h3>
              <p>{{$jobs->requirements}}</p>
            </div>
            <div class="row mb-5">
              <div class="col-6">
                <a href="{{route('postjob',[$jobs->id])}}" class="btn btn-block btn-primary btn-md">Apply Now</a>
              </div>
            </div>

          </div>
          <div class="col-lg-4">
            <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Published on:</strong> April 14, 2019</li>
                <li class="mb-2"><strong class="text-black">Vacancy:</strong> 20</li>
                <li class="mb-2"><strong class="text-black">Employment Status:</strong> {{$jobs->job_type}}</li>
                <li class="mb-2"><strong class="text-black">Experience:</strong> {{$jobs->expierence}} year(s)</li>
                <li class="mb-2"><strong class="text-black">Job Location:</strong> {{$jobs->location}}</li>
                <li class="mb-2"><strong class="text-black">Salary:</strong> {{$jobs->salary}}</li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> Any</li>
              </ul>
            </div>

            <div class="bg-light p-3 border rounded">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
              <div class="px-3">
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- <section class="site-section" id="next">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Related Jobs</h2>
          </div>
        </div>

        <ul class="job-listings mb-5">
        @foreach($jobs as $job)
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="job-single.html"></a>
            <div class="job-listing-logo">
              <img src="{{asset('images/job_logo_1.jpg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>{{$jobs->title}}</h2>
                <strong>{{$jobs->requirements}}</strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span>{{$jobs->location}}
              </div>
              <div class="job-listing-meta">
                <span class="badge badge-danger">{{$jobs->job_type}}</span>
              </div>
            </div>
          </li>
          <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="job-single.html"></a>
            <div class="job-listing-logo">
              <img src="{{asset('images/job_logo_1.jpg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
              <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                <h2>{{$jobs->title}}</h2>
                <strong>{{$jobs->requirements}}</strong>
              </div>
              <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                <span class="icon-room"></span>{{$jobs->location}}
              </div>
              <div class="job-listing-meta">
                <span class="badge badge-danger">{{$jobs->job_type}}</span>
              </div>
            </div>
          </li>
          @endforeach
        </ul>

        <div class="row pagination-wrap">
          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
            <span>Showing 1-7 Of 22,392 Jobs</span>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Prev</a>
              <div class="d-inline-block">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>

      </div>
    </section> -->

    @endsection
