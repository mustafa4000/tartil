
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

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/components.css') }}">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
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
          @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              <div class="row">
                <div class="col-3">
                  <a href="" style="color:black;"> <i class="far fa-donate">Donate|</i></a>   
                </div>
                <div class="col-2">
                  <a href="" style="color:black;"> <i class="far fa-globe">EN</i></a>   
                </div>
                <div class="col"> 
                  @auth
                  <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline" style="color:black;">Home</a>
                  @else
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"> <b>Log in</b> </a> 
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"> <b>Sign Up</b> </a>
                  @endif
                  
                  @endauth
                </div>
              </div>
            </div>
          @endif

        </ul>
      </nav>
      <div class="main-sidebar" style="background: #169E53;">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"><h3 style="color:white">Tartil.me</h3> </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
            <ul class="sidebar-menu active">
              <li class="nav-item dropdown">
                <a href="#"><i class="fas fa-home"></i><span style="color:white">Home</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#"><i class="fas fa-star"></i><span style="color:white">Favorite</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#"><i class="fas fa-user"></i><span style="color:white">Reciter</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#"><i class="fas fa-book-open"></i><span style="color:white">Alquran</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-align-justify"></i> <span style="color:white">Playlist</span></a>
                <ul class="dropdown-menu active">
                  <li><a class="nav-link" href="bootstrap-alert.html">Playlist 1 </a></li>
                  <li><a class="nav-link" href="bootstrap-badge.html">For Today</a></li>
                  <li><a class="nav-link" href="bootstrap-breadcrumb.html">NIight</a></li>
                  <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                  <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
                </ul>
              </li>
            </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content" style="background: white">
        <section class="section">
          <div class="section-body">
            <h3 style="color: black">Home</h3>
            <h5 style="color: black">Top Playing</h5>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Sura Name</th>
                  <th scope="col">Reciter</th>
                  <th scope="col">Rewayat</th>
                  <th scope="col">Duraiton</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><i class="fas fa-play" style="color:green;"></i> </th>
                  <td><a href="" style="font-size: 16px; color:black">Al-Fatiha( The Opener )</a></td>
                  <td> <a href="" style="font-size: 16px; color:black">Abdallah Kamel</a></td>
                  <td> <a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
                  <td>
                    <i class="fas fa-align-justify"></i> 
                    <i class="far fa-star"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><i class="fas fa-play" style="color:green;"></i></th>
                  <td><a href="" style="font-size: 16px; color:black">Al-Maidah( The Table Spread )</a></td>
                  <td><a href="" style="font-size: 16px; color:black">Abdel Aziz Al Ahmed</a></td>
                  <td><a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
                  <td>
                    <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                    <a href="" style="color: black;"><i class="far fa-star"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><i class="fas fa-play" style="color:green;"></i></th>
                  <td><a href="" style="font-size: 16px; color:black">Al-Kahf( The Cave )</a></td>
                  <td><a href="" style="font-size: 16px; color:black">Jamal Shaker Abdullah</a></td>
                  <td><a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
                  <td>
                    <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                    <a href="" style="color: black;"><i class="far fa-star"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><i class="fas fa-play" style="color:green;"></i></th>
                  <td><a href="" style="font-size: 16px; color:black">Al-Rahman( The Beneficent )</a></td>
                  <td><a href="" style="font-size: 16px; color:black">Mohammad Saleh Alim Shah</a></td>
                  <td><a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
                  <td>
                    <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                    <a href="" style="color: black;"><i class="far fa-star"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>

            <div>
              <h5 style="color: black">Most Popular Reciter</h5>
              <a href=""> <p style="text-align: end; color:green;">See all</p> </a>
                <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top"  class="img-rounded" src="{{ url('/assets/imgtartil/abdul_muhsin.jpg') }}" width="304" height="150" alt="Card image cap">
                    <div class="card-body">
                      <div class="mr-1">
                        <a href="" style="font-size: 15px; color:black;">Abdul Muhsin Al Qasim</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdul _rahman.jpeg') }}" width="304" height="150" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 15px; color:black; text-align: center;">Abdul Rahman Al Yusuf</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulraman.jpg') }}" width="304" height="150" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 15px; color:black; text-align: center;">Abdul Rahman Jamal Aloosi</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulhaneef.jpg') }}" width="304" height="150" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 15px; color:black; text-align: center;">Abdul Wadood Haneef</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulwali.jpeg') }}" width="304" height="150" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 15px; color:black; text-align: center;">Abdul Wali Al Arkani</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulkabir.jpg') }}" width="304" height="150" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 15px; color:black; text-align: center;">Abdulkabir Al Hadidi</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/salah_abudair.jpeg') }}" width="304" height="150" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 15px; color:black; text-align: center;">Salah Albudair</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div>
              <h5 style="color: black">All Surah</h5>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">1. Al-Fatihah</a>
                            </h6>
                            <p class="card-text">
                              The Opener
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الفاتحة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">2. Al-Baqarah</a>
                            </h6>
                            <p class="card-text">
                              The Cows
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">البقرة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">3. Ali ‘Imran</a>
                            </h6>
                            <p class="card-text">
                              Family of Imran
                            </p>
                        </div>
                        <div class="col">
                          <p style="font-size: 25px; color:green;">علي عمران</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">4. An-Nisa</a>
                            </h6>
                            <p class="card-text">
                              The Women
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">نساء</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">5. Al-Ma'idah</a>
                            </h6>
                            <p class="card-text">
                              The Banquet
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">المائدة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">6. Al-An’am</a>
                            </h6>
                            <p class="card-text">
                              The Livestock
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الأنعام</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">7. Al-A’raf</a>
                            </h6>
                            <p class="card-text">
                              The Highest Place
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الأعراف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">8. Al-Anfal</a>
                            </h6>
                            <p class="card-text">
                              War loot
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الأنفال</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">9. At-Taubah</a>
                            </h6>
                            <p class="card-text">
                              The Forgiveness
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">التوبة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">10. Yunus</a>
                            </h6>
                            <p class="card-text">
                              Yunus
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">يونس</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">11. Hud</a>
                            </h6>
                            <p class="card-text">
                              Hud
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">هود</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">12. Yusuf</a>
                            </h6>
                            <p class="card-text">
                              Yusuf
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">يوسف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">13. Ar-Ra’d</a>
                            </h6>
                            <p class="card-text">
                              The Thunder
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الرعد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">14. Ibrahim</a>
                            </h6>
                            <p class="card-text">
                              Abraham
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">ابراهيم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">15. Al-Hijr</a>
                            </h6>
                            <p class="card-text">
                              Mount Al Hijr
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الحجر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">16. An-Nahl</a>
                            </h6>
                            <p class="card-text">
                              The Bee
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">النحل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">17. Al-Isra</a>
                            </h6>
                            <p class="card-text">
                              The Night Journey
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الإسراء</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">18. Al-Kahf</a>
                            </h6>
                            <p class="card-text">
                              Companions of the Cave
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الكهف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">19. Maryam</a>
                            </h6>
                            <p class="card-text">
                              Maryam
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">مريم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">20. Taha</a>
                            </h6>
                            <p class="card-text">
                              Ta-ha
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">طه</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">21. Al-Anbiya</a>
                            </h6>
                            <p class="card-text">
                              The Prophets
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الأنبياء</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">22. Al-Hajj</a>
                            </h6>
                            <p class="card-text">
                              Hajj
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;"> الحاج</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">23. Al-Mu’minun</a>
                            </h6>
                            <p class="card-text">
                              The Believers
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">المؤمنون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">24. An-Nur</a>
                            </h6>
                            <p class="card-text">
                              The Light
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">أنور</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">25. Al-furqan</a>
                            </h6>
                            <p class="card-text">
                              The Differentiator
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الفرقان</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">26. Asy-Syu'ara' </a>
                            </h6>
                            <p class="card-text">
                              The Poet
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">سيوارا</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">27. An-Naml</a>
                            </h6>
                            <p class="card-text">
                              The Ant
                            </p>
                        </div>
                        <div class="col">
                          <p style="font-size: 25px; color:green;">النمل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">28. Al-Qasas</a>
                            </h6>
                            <p class="card-text">
                              The Stories
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">القصاص</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">29. Al-’Ankabut</a>
                            </h6>
                            <p class="card-text">
                              The Spider
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">العنكبوت</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">30. Ar-Rum</a>
                            </h6>
                            <p class="card-text">
                              The Romans
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الروم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">31. Luqman</a>
                            </h6>
                            <p class="card-text">
                              Luqman family
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">لقمان</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">32. As-Sajdah</a>
                            </h6>
                            <p class="card-text">
                              The Sajdah
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">السجدة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">33. Al-Ahzab</a>
                            </h6>
                            <p class="card-text">
                              The Allied Groups
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الأحزاب</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">34. Saba'</a>
                            </h6>
                            <p class="card-text">
                              The Sabaeans
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;"> سابا</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">35. Fatir</a>
                            </h6>
                            <p class="card-text">
                              Creator
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">تير</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">36. Ya-Sin</a>
                            </h6>
                            <p class="card-text">
                              Yaasiin
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">ياسين</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">37. As-Saffat</a>
                            </h6>
                            <p class="card-text">
                              Lines
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الصافات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">38. Sad</a>
                            </h6>
                            <p class="card-text">
                              The Letter “Saad”
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">شاد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">39. Az-Zumar</a>
                            </h6>
                            <p class="card-text">
                              The Troops
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الزمر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">40. Ghafir</a>
                            </h6>
                            <p class="card-text">
                              The Forgiving
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">غافر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">41. Fussilat</a>
                            </h6>
                            <p class="card-text">
                              Expla ined in Detail
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">فصيلات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">42. Asy-Syura</a>
                            </h6>
                            <p class="card-text">
                              The Discussion
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الشورى</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">43. Az-Zukhruf</a>
                            </h6>
                            <p class="card-text">
                              The Ornaments of Gold
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الزخرف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">44. Ad-Dukhan</a>
                            </h6>
                            <p class="card-text">
                              The Fog
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الدخان</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">45. Al-Jasiyah</a>
                            </h6>
                            <p class="card-text">
                              The Knees Bend
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;"> الجاسيا</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">46. Al-Ahqaf</a>
                            </h6>
                            <p class="card-text">
                              The Sand Dunes
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الأحقاف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">47. Muhammad</a>
                            </h6>
                            <p class="card-text">
                              Muhammad
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">محمد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">48. Al-Fath</a>
                            </h6>
                            <p class="card-text">
                              The Victory
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الفتح</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">        
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">49. Al-Hujurat</a>
                            </h6>
                            <p class="card-text">
                              The Rooms
                            </p>
                        </div>
                        <div class="col-5">
                          <p style="font-size: 25px; color:green;">الحجرات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">50. Qaf</a>
                            </h6>
                            <p class="card-text">
                              The Letter “Qaaf”
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">قاف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">51. Az-Zariyat</a>
                            </h6>
                            <p class="card-text">
                              The Flying Wind
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الزاريات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">52. At-Tur</a>
                            </h6>
                            <p class="card-text">
                              The Hill
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الطور</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">53. An-Najm</a>
                            </h6>
                            <p class="card-text">
                              The Star
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">النجم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">54. Al-Qamar</a>
                            </h6>
                            <p class="card-text">
                              The Month
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">القمر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">55. Ar-Rahman</a>
                            </h6>
                            <p class="card-text">
                              The Most Gracious
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">رحمن </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">56. Al-Waqi’ah</a>
                            </h6>
                            <p class="card-text">
                              The Judgment Day
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الواقعية</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">57. Al-Hadid</a>
                            </h6>
                            <p class="card-text">
                              The Iron
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;"> الحديد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">58. Al-Mujadilah</a>
                            </h6>
                            <p class="card-text">
                              The Pleading Woman
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">المجادلة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">59. Al-Hasyr</a>
                            </h6>
                            <p class="card-text">
                              The Expulsion
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الحصر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">60. Al-Mumtahanah</a>
                            </h6>
                            <p class="card-text">
                              The Tested Woman
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الممحانة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">61. As-Saff</a>
                            </h6>
                            <p class="card-text">
                              The One Line
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">عساف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">62. Al-Jumu’ah</a>
                            </h6>
                            <p class="card-text">
                              The Conggregation, Friday
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الجمعة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">63. Al-Munafiqun</a>
                            </h6>
                            <p class="card-text">
                              The Hypocrites
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">المنافقون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">64. At-Tagabun</a>
                            </h6>
                            <p class="card-text">
                              The Day Shows Errors
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">التجبون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">65. At-Talaq</a>
                            </h6>
                            <p class="card-text">
                              The Divorce
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الطلاق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">66. At-Tahriim</a>
                            </h6>
                            <p class="card-text">
                              The Prohibition
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">التحريم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">67. Al-Mulk</a>
                            </h6>
                            <p class="card-text">
                              The Soveregnty
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الملك</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">68. Al-Qalam</a>
                            </h6>
                            <p class="card-text">
                              The Pen
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">القلم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">69. Al-Haqqah</a>
                            </h6>
                            <p class="card-text">
                              The Judgment Day
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الحاقة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">70. Al-Ma'arij</a>
                            </h6>
                            <p class="card-text">
                              The Ascending Stairways
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;"> المعارج</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">71. Nuh</a>
                            </h6>
                            <p class="card-text">
                              Noah
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">نوح</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">72. Al-Jinn</a>
                            </h6>
                            <p class="card-text">
                              The Jinn
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الجن</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">73. Al-Muzzammil</a>
                            </h6>
                            <p class="card-text">
                              The Blanket Person
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">المزمل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">74. Al-Muddassir</a>
                            </h6>
                            <p class="card-text">
                              The Cloaked One
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">المدثر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">75. Al-Qiyamah</a>
                            </h6>
                            <p class="card-text">
                              The Doomsday
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">القيامة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">76. Al-Insan</a>
                            </h6>
                            <p class="card-text">
                              The Human
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الإنسان</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">77. Al-Mursalat</a>
                            </h6>
                            <p class="card-text">
                              The Emissaries
                            </p>
                        </div>
                        <div class="col-5">
                          <p style="font-size: 25px; color:green;">المرسلات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">78. An-Naba'</a>
                            </h6>
                            <p class="card-text">
                              The Big news
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">النبأ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">79. An-Nazi’at</a>
                            </h6>
                            <p class="card-text">
                              Those who drag forth
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">النازعات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">80. ‘Abasa</a>
                            </h6>
                            <p class="card-text">
                              He is surly
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">أباسا</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">81. At-Takwir</a>
                            </h6>
                            <p class="card-text">
                              The Roll
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;"> التكوير</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">82. Al-Infitar</a>
                            </h6>
                            <p class="card-text">
                              The Cleaving
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الانفتار</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">83. Al-Mutaffifin</a>
                            </h6>
                            <p class="card-text">
                              The Defrauding
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">المطففين</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">84. Al-Insiqaq</a>
                            </h6>
                            <p class="card-text">
                              The Sundering
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الانسحاق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">85. Al-Buruj</a>
                            </h6>
                            <p class="card-text">
                              The Mansions of the Stars
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">البروج</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">86. At-Tariq</a>
                            </h6>
                            <p class="card-text">
                              The Nightcommer
                            </p>
                        </div>
                        <div class="col">
                          <p style="font-size: 25px; color:green;">الطارق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">87. Al-A’la</a>
                            </h6>
                            <p class="card-text">
                              The Most Hight
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الأعلى</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">88. Al-Gasyiyah</a>
                            </h6>
                            <p class="card-text">
                              The Overwhelming
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الغاشية</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">89. Al-Fajr</a>
                            </h6>
                            <p class="card-text">
                              The Dawn
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الفجر	</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">90. Al-Balad</a>
                            </h6>
                            <p class="card-text">
                              The Country
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">البلد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">91. Asy-Syams</a>
                            </h6>
                            <p class="card-text">
                              Those Sun
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الشمس</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">92. Al-Lail</a>
                            </h6>
                            <p class="card-text">
                              The Night
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">اليل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">93. Ad-Duha</a>
                            </h6>
                            <p class="card-text">
                              The Morning Hours
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;"> الضحى‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">94. Al-Insyirah</a>
                            </h6>
                            <p class="card-text">
                              The Relief
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الإنشراح‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">95. At-Tin</a>
                            </h6>
                            <p class="card-text">
                              The Fig
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">التينِ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">96. Al-’Alaq</a>
                            </h6>
                            <p class="card-text">
                              The Clot of Blood
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">العلق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">97. Al-Qadr</a>
                            </h6>
                            <p class="card-text">
                              The Glory
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">القدر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">98. Al-Bayyinah</a>
                            </h6>
                            <p class="card-text">
                              The Clear Proof
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">البينة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">99. Az-Zalzalah</a>
                            </h6>
                            <p class="card-text">
                              The Eart hquake
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الزلزلة‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">100. Al-’Adiyat</a>
                            </h6>
                            <p class="card-text">
                              The Courser
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">العاديات‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">101. Al-Qari’ah</a>
                            </h6>
                            <p class="card-text">
                              The Calamity
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">القارعة‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">102. At-Takasur</a>
                            </h6>
                            <p class="card-text">
                              The Rivalry in world incre..
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">التكاثر‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">103. Al-’Asr</a>
                            </h6>
                            <p class="card-text">
                              The Declining Day
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">العصر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">104. Al-Humazah</a>
                            </h6>
                            <p class="card-text">
                              The Traducer
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الهمزة‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">105. Al-Fil</a>
                            </h6>
                            <p class="card-text">
                              The Elephant
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;"> الفيل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">106. Al-Quraisy</a>
                            </h6>
                            <p class="card-text">
                              The tribe of Quraish
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">القريش</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">107. Al-Ma’un</a>
                            </h6>
                            <p class="card-text">
                              The Small Kindnesses
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الماعون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">108. Al-Kausar</a>
                            </h6>
                            <p class="card-text">
                              The Abundant favors
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الكوثر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">     
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">109. Al-Kafirun</a>
                            </h6>
                            <p class="card-text">
                              The Unbelievers
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الكافرون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">110. An-Nasr</a>
                            </h6>
                            <p class="card-text">
                              The Divine Support
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">النصر‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">111. Al-Lahab</a>
                            </h6>
                            <p class="card-text">
                              The Flaming Fire
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">اللهب‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">112. Al-Ikhlas</a>
                            </h6>
                            <p class="card-text">
                              The Fajr Time
                            </p>
                        </div>
                        <div class="col-5">
                          <p style="font-size: 25px; color:green;">الإخلاص‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">113. Al-Falaq</a>
                            </h6>
                            <p class="card-text">
                              The Mankind
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الفلق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid black;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: black">114. An-Nas</a>
                            </h6>
                            <p class="card-text">
                              The Mankind
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:green;">الناس</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <b>2021</b>  <div class="bullet"></div> <b>Design By</b> <a href="https://nauval.in/">Abdul Mustafa Harahap</a>
        </div>
        <div class="footer-right">
           <b>QODR</b> 
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('/assets/js/stisla.js') }}"></script>
  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
</body>
</html>