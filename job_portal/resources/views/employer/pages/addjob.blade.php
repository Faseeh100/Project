@extends('layout.layoutemployer')

 @section('content')


<div class="pagetitle">
  <h1>Publish Job</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item">Job</li>
      <li class="breadcrumb-item active">Publish Job</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Job Details</h5>

          <!-- Floating Labels Form -->
          <form method="POST" action="{{ route('store') }}" class="row g-3">
          @csrf

            <div class="col-md-12">
              <div class="form-floating">
                <input type="text" class="form-control" value="" name="title" id="Title" placeholder="Title">
                <label for="Title">Title</label>
              </div>
              @error("title")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
            </div>
            <div class="col-md-12">
              <div class="form-floating">
                <input type="text" class="form-control" value="{{old('location')}}" name="location" id="floatingName" placeholder="Your Name">
                <label for="floatingName">Location</label>
              </div>
              @error("location")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control"  name="description" placeholder="Description" id="floatingTextarea" style="height: 100px;">{{old('description')}}</textarea>
                <label for="Description">Description</label>
              </div>
              @error("discription")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control"  name="requirements" placeholder="Requirements" id="Requirements" style="height: 100px;">{{old('requirements')}}</textarea>
                <label for="Requirements">Requirements</label>
              </div>
              @error("requirements")
                        <span class="text-danger">{{$message}}</span>
                  @enderror

            </div>


            <div class="col-md-4">
              <div class="form-floating mb-3">
                <select class="form-select" name="job_type" id="job_type" aria-label="State">
                  <option value="Full Time" selected>Full Time</option>
                  <option value="Part Time">Part Time</option>
                  <option value="Online">Online </option>
                </select>
                <label for="floatingSelect">Job Type</label>
              </div>
              @error("job_type")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="text" class="form-control" value="{{old('salary')}}" name="salary" id="Salary" placeholder="Salary">
                <label for="Salary">Salary</label>
              </div>
              @error("salary")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
            </div>
              <div class="col-md-4">
              <div class="form-floating">
                <input type="number" class="form-control" value="{{old('expierence')}}" name="expierence" id="expierence" placeholder="Experience">
                <label for="expierence">Experience</label>
              </div>
              @error("expierence")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
            </div>
              <div class="col-md-12">
                  <div class="form-floating">
                      <input type="text" class="form-control" value="{{old('qualification')}}" name="qualification" id="qualification" placeholder="Qualification">
                      <label for="qualification">Qualification</label>
                  </div>
                  @error("qualification")
                  <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>

    </div>
  </div>
</section>

@endsection
