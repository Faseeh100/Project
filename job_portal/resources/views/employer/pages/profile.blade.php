@extends('layout.layoutemployer')

 @section('content')


    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2 class="text-center">{{$user[0]->name}}</h2>
              <h3>{{$employer[0]->company_name}}</h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Name</div>
                    <div class="col-lg-9 col-md-8">{{$user[0]->name}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{$user[0]->email}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company Name</div>
                    <div class="col-lg-9 col-md-8">{{$employer[0]->company_name}}</div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">{{$employer[0]->address}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">{{$employer[0]->phone}}</div>
                  </div>



                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="POST" action="{{ route('profile_edit') }}">
                  @csrf
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" placeholder="name">
                      </div>
                      @error("name")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                    </div>



                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="text" class="form-control"value="{{old('email')}}" name="email" id="email" placeholder="email">
                      </div>
                      @error("email")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                    </div>


                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="text" class="form-control" value="{{old('company_name')}}" name="company_name" id="company_name" placeholder="company_name">
                      </div>
                      @error("company_name")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="text" class="form-control" value="{{old('address')}}" name="address" id="address" placeholder="address">
                      </div>
                      @error("address")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="text" class="form-control" value="{{old('phone')}}" name="phone" id="phone" placeholder="phone" >
                      </div>
                      @error("phone")
                        <span class="text-danger">{{$message}}</span>
                  @enderror
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="POST" action="{{ route('edit_password') }}">
                  @csrf
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirmnewpassword" type="password" class="form-control" id="confirmnewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

    @endsection
