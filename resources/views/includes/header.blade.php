<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
    <div class="search-element">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="500" style="background: #F6F6F6;">
      <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    </div>
  </form>
  <ul class="navbar-nav navbar-right">
    <li class="mr-3"><a href="{{ route('pages.donate.index') }}" style="color:#2F2F2F;"><i class="far fa-donate fa-1x" style="width: 18px"></i>  <b class="mr-2" style="font-size: 18px">Donasi</b> </a></li>
    
    <li class="dropdown dropdown-list-toggle mr-3"><a href="#" data-toggle="dropdown"
      style="color:#2F2F2F;">
      <i class="far fa-globe fa-1x" style="width: 18px"></i> <b class="mr-2" style="font-size: 18px">EN</b> </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" id="google_translate_element" type="button"></button>
        </ul>
    </li>

    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
      {{-- <div class="d-sm-none d-lg-inline-block" style="color: black;">Hi, Ujang Maman</div></a> --}}
      <div class="dropdown-menu dropdown-menu-right">
        {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
        <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Edit Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </div>
    </li>
  </ul>
</nav>