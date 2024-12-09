@extends('layout.layout')

 @section('content')

 <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Sign Up/Login</h1>
            <div class="custom-breadcrumbs">
              <a href="{{ route('home') }}">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Log In</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-5">
            <h2 class="mb-4">Sign Up To JobBoard</h2>
            <form action="{{route('signup')}}" method="post"  class="p-4 border rounded">
                @csrf
            <div class="row form-group">
                <div class="col-md-12 mb-2 mb-md-0">
                  <label class="text-black" for="name">Name</label>
                  <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control" placeholder="Name">
                  @error("name")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-2 mb-md-0">
                  <label class="text-black" for="email">Email</label>
                  <input type="text"name="email"value="{{old('email')}}" id="email" class="form-control" placeholder="Email address">
                  @error("email")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-2 mb-md-0">
                  <label class="text-black" for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  @error("password")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="confirm_password">Re-Type Password</label>
                  <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Re-type Password">
                  @error("confirm_password")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
            <div class="d-flex align-item-center mt-2" >
                <p>already have an account :</p>
                <a href="{{route('login_view')}}"> login </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection