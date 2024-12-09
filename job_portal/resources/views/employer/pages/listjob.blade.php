@extends('layout.layoutemployer')

 @section('content')
 

    <div class="pagetitle">
      <h1>List Group</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item">Job</li>
          <li class="breadcrumb-item active">List Job</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

    

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Jobs</h5>

              <!-- List group with custom content -->
              <ol class="list-group list-group-numbered " style="list-style:none !important">
                <li class="list-group-item d-flex justify-content-between align-items-start" >
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Title</div>
                    <p>{{ $jobs[0]->title }}</p>
                    
                  </div>
                
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Location</div>
                    <p>{{ $jobs[0]->location }}</p>
                  
                  </div>
               
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Description</div>
                    <p>{{ $jobs[0]->description }}</p>
                    
                  </div>

                  <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Requirements</div>
                    <p>{{ $jobs[0]->requirements }}</p>
                  </div>

                  <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Job Type</div>
                    <p>{{ $jobs[0]->job_type }}</p>
                  </div>
                  
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Status</div>
                    <p>{{ $jobs[0]->status }}</p>
                  
                  </div>

                  <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">salary</div>
                    <p>{{ $jobs[0]->salary }}</p>
                  </div>
                </li>
              </ol><!-- End with custom content -->

            </div>
          </div>

         
    </section>



   <div class="pagetitle">
     <h1>Application</h1>
     <nav>
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
         <li class="breadcrumb-item">Tables</li>
         <li class="breadcrumb-item active">Data</li>
       </ol>
     </nav>
   </div><!-- End Page Title -->

   <section class="section">
     <div class="row">
       <div class="col-lg-12">

         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Application </h5>
            
             <!-- Table with stripped rows -->
             <table class="table datatable">
               <thead>
                 <tr>
                   <th>
                     Title
                   </th>
                   <th>Name</th>
                   <th>resume</th>
                
                   <th>cover_latter</th>
                 </tr>
               </thead>
               <tbody>
               @foreach($applications as $application)
                 <tr>
                   <td><a href="{{route('listjobview',$application->job_listing_id)}}">{{$application->title}}</a></td>
                   <td>{{$application->first_name}} {{$application->last_name}}</td>
                   <td><a download class="btn btn-sm btn-primary" href="{{asset('storage/'.$application->resume)}}">Download</td>
                   <td><a download class="btn btn-sm btn-primary" href="{{asset('storage/'.$application->cover_latter)}}">Download</td>
                 </tr>
                 @endforeach
                 
               </tbody>
             </table>
             <!-- End Table with stripped rows -->

           </div>
         </div>

       </div>
     </div>
   </section>

 
   

    @endsection