@extends('layout.layoutemployer')

 @section('content')
 
 <div class="pagetitle">
      <h1>Active Job</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item">Job</li>
          <li class="breadcrumb-item active">All Job</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Id
                    </th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Job Type</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody>
                  @if(sizeof($jobs)>0)
                    @foreach($jobs as $job)
                    <tr>
                      <td>{{$job->id}} </td>
                      <td><a href="{{route('listjobview',$job->id)}}">{{$job->title}}</a></td>
                      <td>{{$job->location}}</td>
                      <td>{{$job->job_type}}</td>
                      <td>{{$job->salary}}</td>
                    </tr>
                    @endforeach
                  @else
                  <p>No record Found</p>
                  @endif
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>



    @endsection