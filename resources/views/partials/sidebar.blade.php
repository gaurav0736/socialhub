<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="{{ url('/') }}" class="simple-text logo-mini">
        PM
        </a>
        <a href="{{ url('/') }}" class="simple-text logo-normal">
          {{ config('app.name', 'laravel') }}
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ url('/') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/projects') }}">
              <i class="material-icons">content_paste</i>
              <p>Projects</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/tasks') }}">
              <i class="material-icons">library_books</i>
              <p>Tasks</p>
            </a>
          </li>
         
         
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/settings') }}">
              <i class="material-icons">settings</i>
              <p>Settings</p>
            </a>
          </li>

           <li class="nav-item ">
            <a class="nav-link" href="{{ url('/profile') }}">
              <i class="material-icons">person</i>
              <p>My Profile</p>
            </a>
          </li>
             
        </ul>
      </div>
    </div>



<!-- Sidebar for changing color and sidebar image background -->

  <!--    <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ asset('img/sidebar-1.jpg') }}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ asset('img/sidebar-2.jpg') }}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ asset('img/sidebar-3.jpg') }}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ asset('img/sidebar-4.jpg') }}" alt="">
          </a>
        </li>
     
       
      </ul>
    </div>
  </div> -->
    