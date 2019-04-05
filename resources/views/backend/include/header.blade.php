<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset("assets/backend/images/logo.svg")}}" alt="logo"></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset("assets/backend/images/logo-mini.svg")}}" alt="logo"></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>

    <ul class="navbar-nav navbar-nav-right">

      <li class="nav-item nav-profile dropdown mr-0 mr-sm-2">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{asset("assets/backend/images/faces/face28.jpg")}}" alt="profile"/>
          <span class="nav-profile-name">
            {{Auth::user()->name}}
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="mdi mdi-settings text-primary"></i>
            Profil
          </a>
          <a href="pages/samples/login-2.html" class="dropdown-item">
            <i class="mdi mdi-logout text-primary"></i>
            Çıkış Yap
          </a>
        </div>
      </li>

    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>