<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="index.html" style="font-size: 25px"> <b style="color: #fff;">Tartil.me</b> </a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a>
  </div>
  <ul class="sidebar-menu">
    <li class="nav-item dropdown">
      <a href="{{ route('dashboard') }}"><i class="fas fa-home" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Home</span></a>
    </li>
    <li class="nav-item dropdown">
      <a href="{{ route('pages.favorite') }}"><i class="fas fa-star" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Favorite</span></a>
    </li>
    <li class="nav-item dropdown">
      <a href="{{ route('pages.receiter') }}"><i class="fas fa-user" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Reciter</span></a>
    </li>
    <li class="nav-item dropdown">
      <a href="{{ route('pages.alquran') }}"><i class="fas fa-book-open" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Alquran</span></a>
    </li>
    <li class="dropdown">
      <a href="{{ route('pages.tambahan') }}" class="nav-link" data-toggle="dropdown"><i class="fas fa-align-justify" style="color:#5CBB87;"></i> <span style="color:#5CBB87; font-size: 16px;">Playlist</span> <i href="{{ route('pages.tambahan') }} " class="far fa-plus-circle" style="color: white;"> </i>  </a>                 
      <ul class="dropdown-menu" style="display: none;">
        <hr style="background: white">
        <li><a class="nav-link" style="color:#5CBB87; font-size: 16px;" href="{{ route('pages.playlist') }}">Playlist 1 </a></li>
        <li><a class="nav-link" style="color:#5CBB87; font-size: 16px;" href="bootstrap-badge.html">For Today</a></li>
        <li><a class="nav-link" style="color:#5CBB87; font-size: 16px;" href="bootstrap-breadcrumb.html">NIight</a></li>
        <li><a class="nav-link" style="color:#5CBB87; font-size: 16px;" href="bootstrap-buttons.html">Buttons</a></li>
        <li><a class="nav-link" style="color:#5CBB87; font-size: 16px;" href="bootstrap-card.html">Card</a></li>
      </ul>
    </li>
  </ul>
</aside>
