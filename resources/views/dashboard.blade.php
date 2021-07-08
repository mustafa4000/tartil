<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('/node_modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/node_modules/summernote/dist/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('/node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/components.css') }}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  {{-- w3css --}}
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    /* Float four columns side by side */
    .column {
      float: left;
      width: 25%;
      padding: 0 10px;
    }
    
    /* Remove extra left and right margins, due to padding */
    .row {margin: 0 -5px;}
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
      }
    }
    
    /* Style the counter cards */
    .card {
      /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
      padding: 16px;
      text-align: left;
      background-color: #f  ff;
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
  
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="600" style="background: #F6F6F6;">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="mr-3"><a href="{{ route('pages.donate.index') }}" style="color:#2F2F2F;"><i class="far fa-donate fa-1x" style="width: 18px"></i>  <b class="mr-2" style="font-size: 18px">Donasi</b> </a>
          </li>
          <li class="dropdown dropdown-list-toggle mr-3"><a href="#" data-toggle="dropdown" style="color:#2F2F2F;">
            <i class="far fa-globe fa-1x" style="width: 18px"></i> <b class="mr-2" style="font-size: 18px">EN</b> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
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
      <div class="main-sidebar" style="background: #169E53;">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html" style="font-size: 25px"> <b style="color: #fff;">Tartil.me</b> </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="nav-item dropdown">
              <a href="{{ route('dashboard') }}"><i class="fas fa-home fa-2x" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Home</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="{{ route('pages.favorite') }}"><i class="fas fa-star fa-2x" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Favorite</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="{{ route('pages.receiter') }}"><i class="fas fa-user fa-2x" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Reciter</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="{{ route('pages.alquran') }}"><i class="fas fa-book-open fa-2x" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Alquran</span></a>
            </li>
            <li class="dropdown">
              <a href="{{ route('pages.tambahan') }}" class="nav-link" data-toggle="dropdown"><i class="fas fa-align-justify fa-2x" style="color:#5CBB87;"></i> <span style="color:#5CBB87; font-size: 16px;">Playlist</span> <i href="{{ route('pages.tambahan') }} " class="far fa-plus-circle fa-2x" style="color: white;"> </i>  </a>                 
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
      </div>

      <!-- Main Content -->
      <div class="main-content" style="background: #fff;">
        <section class="section">
          <div class="section-body">
            <h3 style="color: #2F2F2F;"> <b>Home</b> </h3>
            <h5 style="color: #2F2F2F;">Top Playing</h5>            
            <table class="table" >
              <thead>
                <tr>
                  <th scope="col" style="color: #9D9D9D; background: white;"></th>
                  <th scope="col" style="color: #9D9D9D; background: white;">Sura Name</th>
                  <th scope="col" style="color: #9D9D9D; background: white;">Reciter</th>
                  <th scope="col" style="color: #9D9D9D; background: white;">Rewayat</th>
                  <th scope="col" style="color: #9D9D9D; background: white;">Duraiton</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  {{-- @foreach ($homes as $home) --}}
                    <th scope="row">
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Vector.png') }}" width="15" alt="">
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#">
                          <div class="row container-fluid">
                            <div class="col">
                              <img src="{{ url('/assets/imgtartil/Abdallah Kamel.jpg') }}" width="50" alt="">
                              <b>Al-fatihah (The Opener)</b>
                              <b>Abdallah Kamel</b>  
                            </div>
                            <div class="col">
                              <audio controls> 
                                <source src="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" type="audio/mpeg"> 
                              </audio>
                            </div>
                          </div>
                        </a>
                      </div>
                    </th>
                  @foreach ($reciters as $reciter)  
                    <td>
                        <a style="font-size: 16px; color:#2F2F2F">Al-Fatiha( The Opener )</a> 
                    </td>  
                    <td>
                      <a href="{{ route('reciters.show', ['slug' => $reciter->slug] ) }}" style="font-size: 16px; color:#2F2F2F">{{ $reciter->name }} </a>
                    </td>
                    <td>
                      <a href="" style="font-size: 16px; color:#2F2F2F">@foreach($reciter->riwayats as $riwayat) {{ $riwayat->name }} @endforeach</a>
                    </td>
                  @endforeach                     
                    <td class="row">
                      <div class="btn-group dropleft col">
                        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-align-justify" style="color: #2F2F2F;"></i> 
                        </a>
                        <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <div class="btn-group dropleft col">
                        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="far fa-star" style="color: #2F2F2F;"></i>
                        </a>
                        <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                          <a class="dropdown-item" href="#"> 
                            <img src="{{ url('/assets/imgtartil/fb.png') }}" width="10" alt=""> Facebook
                          </a>
                          <a class="dropdown-item" href="#">
                              <img src="{{ url('/assets/imgtartil/instagram.png') }}" width="15" alt=""> Instagram
                          </a>
                          <a class="dropdown-item" href="#"> 
                              <img src="{{ url('/assets/imgtartil/Telegram.png') }}" width="15" alt=""> Telegram
                          </a>
                          <a class="dropdown-item" href="#">
                              <img src="{{ url('/assets/imgtartil/Twitter.png') }}" width="15" alt=""> Twitter
                          </a>
                          <a class="dropdown-item" href="#"> 
                              <img src="{{ url('/assets/imgtartil/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                          </a>
                        </div>
                      </div>
                      <div class="btn-group dropleft col">
                        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                        </a>
                        <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                          <a class="dropdown-item" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                            Share

                            <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                              <a class="dropdown-item" target="_blank" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                              </a>

                              <a class="dropdown-item" href="#">
                                  <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                              </a>
                              
                              <a class="dropdown-item" href="#"> 
                                  <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                              </a>

                              <a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button">
                                  <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                              </a>

                              <a class="dropdown-item" href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"> 
                                  <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                              </a>
                            </div>  
                          </a>
                          <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" class="dropdown-item" download="Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3"> 
                            <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                            Download
                          </a>
                        </div>
                      </div>
                    </td>    
                  {{-- @endforeach --}}
                </tr>
              </tbody>
            </table>  

            <div>
              <div class="row">
                <div class="col">
                  <h5 style="color: #2F2F2F">Most Popular Reciter</h5>
                </div>
                <div class="col">
                  <a href="{{ route('pages.receiter') }}"> <p style="text-align: end; color:#169E53;">See all</p> </a>
                </div>
              </div>
              <div class="row responsive">
                @foreach ($reciters as $reciter)
                  <div class="col-2 w3-white w3-hover-shadow">
                    <img class="card-img-top" class="img-rounded" src="{{ $reciter->image_url }}" width="132px" height="132px" style="border-radius: 8px; object-fit: cover;" alt="Card image cap">
                    <div class="m-3 text-center">
                      <div class="card-title">
                        <a href="{{ route('reciters.show', ['slug' => $reciter->slug] ) }}" style="font-size: 11px; color:#2F2F2F; text-align: center;" >{{ $reciter->name }} </a>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            
            <div>
              <div class="col">
                <h5 style="color: #2F2F2F">All Surah</h5>
              </div>
              <div class="row">
                {{-- 1 samapai 4 kolom --}}
                <?php $i =1; ?>
                @foreach ($surahs as $surah)
                  <div class="column">
                    <div class="card w3-white w3-hover-shadow">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                              <a href="{{ route('surah.show', ['slug' => $surah->slug] ) }}" style="color: #2F2F2F">{{ $i }}. {{ $surah->name }}</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Opener
                            </p>
                        </div>
                        <div class="mr-3">
                          <p style="font-size: 25px; color:#169E53;">الفاتحة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php $i++ ?>
                @endforeach
      
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <script type="text/javascript">
    $('.responsive').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>


  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
  <script src="{{ asset('/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('/assets/js/page/index.js') }}"></script>
</body>
</html>
