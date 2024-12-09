@extends('layout.layout')

 @section('content')

<section class="section-hero overlay inner-page bg-image" style="background-image: url({{asset('images/hero_1.jpg')}});" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            <div class="custom-breadcrumbs">
              <a href="{{ route('home') }}">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Post a Job</strong></span>
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
              <div>
                <h2>Post A Job</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">

              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Submit</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded" enctype="multipart/form-data" action="{{route('submit')}}" method="post">
            @csrf
              <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>

             <input type="hidden" name="job_listing_id" value="{{$id}}">

              <div class="form-group">
                <label for="fist name">First Name</label>
                <input type="text" class="form-control" name="first_name"  value="{{old('first_name')}}" id="first_name" placeholder="Fist Name">
                @error("first_name")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="Last Name">Last Name</label>
                <input type="text" class="form-control" name="last_name"  value="{{old('last_name')}}" id="last_name" placeholder="Last Name">
                @error("last_name")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" name="address"  value="{{old('address')}}" id="address" placeholder="Enter Your Address">
                @error("address")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="tel" class="form-control" name="phone"  value="{{old('phone')}}" id="phone" placeholder="Enter Number">
                @error("phone")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
                <div class="form-group">
                    <label for="expierence">Experience</label>
                    <input type="number" class="form-control" name="expierence"  value="{{old('expierence')}}" id="expierence" placeholder="Enter expierence years">
                    @error("expierence")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" class="form-control" name="qualification"  value="{{old('qualification')}}" id="qualification" placeholder="Enter qualification">
                    @error("qualification")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
              <div class="form-group ">
                <label for="Resume">Resume</label>
                <input type="file" class="form-control border-0"  name="resume" id="resume" >
                @error("resume")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>

              <div class="form-group ">
                <label for="cover_letter">Cover Letter</label>
                <input type="file" class="form-control border-0" name="cover_latter" id="cover_latter" >
                @error("cover_latter")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
              <div class="col-6">
                <button class="btn btn-block btn-primary btn-md">Submit</button>
              </div>




            </form>
          </div>


        </div>

      </div>
    </section>

    @endsection
