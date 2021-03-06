<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <div class="sidenav-header-inner text-center"><img src="{{ URL::asset('images/stockist/avatar-1.jpg') }}" alt="person" class="img-fluid rounded-circle">
        <h2 class="h5 text-uppercase">{{ Auth::user()->name }}</h2><span class="text-uppercase">Web Developer</span>
      </div>
      <div class="sidenav-header-logo"><a href="{{ Route('stockist.dashboard') }}" class="brand-small text-center"> <strong>S</strong><strong class="text-primary">D</strong></a></div>
    </div>
    <div class="main-menu">
      <ul id="side-main-menu" class="side-menu list-unstyled">
        <li class="active"><a href="{{ Route('stockist.dashboard') }}"> <i class="icon-home"></i><span>Home</span></a></li>
        <li> <a href="forms.html"><i class="icon-form"></i><span>Forms</span></a></li>
        <li> <a href="charts.html"><i class="icon-presentation"></i><span>Charts</span></a></li>
        <li> <a href="tables.html"> <i class="icon-grid"> </i><span>Tables  </span></a></li>
        <li> <a href="login.html"> <i class="icon-interface-windows"></i><span>Login page                        </span></a></li>
        <li> <a href="#"> <i class="icon-mail"></i><span>Demo</span>
            <div class="badge badge-warning">6 New</div></a></li>
      </ul>
    </div>
    <div class="admin-menu">
      <ul id="side-admin-menu" class="side-menu list-unstyled">
        <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Dropdown</span>
            <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
          <ul id="pages-nav-list" class="collapse list-unstyled">
            <li> <a href="#">Page 1</a></li>
            <li> <a href="#">Page 2</a></li>
            <li> <a href="#">Page 3</a></li>
            <li> <a href="#">Page 4</a></li>
          </ul>
        </li>
        <li> <a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>
        <li> <a href="#"> <i class="icon-flask"> </i><span>Demo</span>
            <div class="badge badge-info">Special</div></a></li>
        <li> <a href=""> <i class="icon-flask"> </i><span>Demo</span></a></li>
        <li> <a href=""> <i class="icon-picture"> </i><span>Demo</span></a></li>
      </ul>
    </div>
  </div>
</nav>
