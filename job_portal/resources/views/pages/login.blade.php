@extends('layout.layout')

 @section('content')

 <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Login</h1>
            <div class="custom-breadcrumbs">
              <a href="{{ route('home') }}">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Log In</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    @if(isset($success))
        <div class="alert alert-success">{{$success}}</div>
    @endif

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h2 class="mb-4">Log In To JobBoard</h2>
            <form method="POST" action="{{ route('login') }}" class="p-4 border rounded">
            @csrf
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email</label>
                  <input type="text" name= "email"id="email" value="{{old('name')}}" class="form-control" placeholder="Email address">
                  @error("email")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                  @error("password")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
            <div class="d-flex align-item-center mt-2" >
                <p>Don't have an account :</p>
                <a href="{{route('signup_view')}}"> Register Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection