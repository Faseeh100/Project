<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{route('dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Jobs</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('addjobview')}}">
          <i class="bi bi-circle"></i><span>Publish Jobs</span>
        </a>
      </li>
      <li>
        <a href="{{route('avaliblejobview')}}">
          <i class="bi bi-circle"></i><span>Active Jobs</span>
        </a>
      </li>
      <li>
        <a href="{{route('alljobview')}}">
          <i class="bi bi-circle"></i><span>All Jobs</span>
        </a>
      </li>

    </ul>
  </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('applicationview')}}">
            <i class="bx bxs-detail"></i>
            <span>Applications</span>
        </a>
    </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('profileview')}}">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->


</ul>

</aside><!-- End Sidebar-->
