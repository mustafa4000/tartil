
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
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" width="576px" height="40px" style="background:#F7F7F7; border-radius: 8px; top:32px; left: 304px;">
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
                  <a href="" style="color:#2F2F2F;"> <i class="far fa-donate">Donate|</i></a>   
                </div>
                <div class="col-2">
                  <a href="" style="color:#2F2F2F;"> <i class="far fa-globe">EN</i></a>   
                </div>
                <div class="col"> 
                  @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline" style="color:#2F2F2F;">Home</a>
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
            <a href="index.html"><h3 style="color:#FFFFFF;">Tartil.me</h3> </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
            <ul class="sidebar-menu active">
              <li class="nav-item dropdown">
                <a href="#"><i class="fas fa-home fa-2x" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Home</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#"><i class="fas fa-star fa-2x" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Favorite</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#"><i class="fas fa-user fa-2x" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Reciter</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#"><i class="fas fa-book-open fa-2x" style="color:#5CBB87;"></i><span style="color:#5CBB87; font-size: 16px;">Alquran</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-align-justify fa-2x" style="color:#5CBB87;"></i> <span style="color:#5CBB87; font-size: 16px;">Playlist</span></a>
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
            <h3 style="color: #2F2F2F;">Home</h3>
            <h5 style="color: #2F2F2F;">Top Playing</h5>
            <table class="table" >
              <thead>
                <tr>
                  <th scope="col" style="color: #9D9D9D; background: white"></th>
                  <th scope="col" style="color: #9D9D9D; background: white;">Sura Name</th>
                  <th scope="col" style="color: #9D9D9D; background: white;">Reciter</th>
                  <th scope="col" style="color: #9D9D9D; background: white;">Rewayat</th>
                  <th scope="col" style="color: #9D9D9D; background: white;">Duraiton</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i> </th>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Fatiha( The Opener )</a></td>
                  <td> <a href="" style="font-size: 16px; color:#2F2F2F">Abdallah Kamel</a></td>
                  <td> <a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
                  <td>
                    <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                    <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i></th>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Maidah( The Table Spread )</a></td>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdel Aziz Al Ahmed</a></td>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
                  <td>
                    <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                    <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i></th>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Kahf( The Cave )</a></td>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Jamal Shaker Abdullah</a></td>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
                  <td>
                    <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                    <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i></th>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Rahman( The Beneficent )</a></td>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Mohammad Saleh Alim Shah</a></td>
                  <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
                  <td>
                    <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                    <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>

            <div>
              <h5 style="color: #2F2F2F">Most Popular Reciter</h5>
              <a href=""> <p style="text-align: end; color:#169E53;">See all</p> </a>
                <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top"  class="img-rounded" src="{{ url('/assets/imgtartil/abdul_muhsin.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                    <div class="card-body">
                      <div class="mr-1">
                        <a href="" style="font-size: 14px; color:#2F2F2F;">Abdul Muhsin Al Qasim</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdul _rahman.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Rahman Al Yusuf</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulraman.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Rahman Jamal Aloosi</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulhaneef.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Wadood Haneef</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulwali.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Wali Al Arkani</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulkabir.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdulkabir Al Hadidi</a>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdullah_al_buraimi.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                    <div class="card-body">
                      <div class="card-title">
                        <a href="" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdullah Al Buraimi</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div>
              <h5 style="color: #2F2F2F">All Surah</h5>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">1. Al-Fatihah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Opener
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الفاتحة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">2. Al-Baqarah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Cows
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">البقرة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">3. Ali ‘Imran</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Family of Imran
                            </p>
                        </div>
                        <div class="col">
                          <p style="font-size: 25px; color:#169E53;">علي عمران</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">4. An-Nisa</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Women
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">نساء</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">5. Al-Ma'idah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Banquet
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">المائدة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">6. Al-An’am</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Livestock
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الأنعام</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">7. Al-A’raf</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Highest Place
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الأعراف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">8. Al-Anfal</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              War loot
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الأنفال</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">9. At-Taubah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Forgiveness
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">التوبة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">10. Yunus</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Yunus
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">يونس</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">11. Hud</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Hud
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">هود</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">12. Yusuf</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Yusuf
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">يوسف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">13. Ar-Ra’d</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Thunder
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الرعد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">14. Ibrahim</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Abraham
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">ابراهيم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">15. Al-Hijr</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Mount Al Hijr
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الحجر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">16. An-Nahl</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Bee
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">النحل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">17. Al-Isra</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Night Journey
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الإسراء</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">18. Al-Kahf</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Companions of the Cave
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الكهف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">19. Maryam</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Maryam
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">مريم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">20. Taha</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Ta-ha
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">طه</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">21. Al-Anbiya</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Prophets
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الأنبياء</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">22. Al-Hajj</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Hajj
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;"> الحاج</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">23. Al-Mu’minun</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Believers
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">المؤمنون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">24. An-Nur</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Light
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">أنور</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">25. Al-furqan</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Differentiator
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الفرقان</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">26. Asy-Syu'ara' </a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Poet
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">سيوارا</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">27. An-Naml</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Ant
                            </p>
                        </div>
                        <div class="col">
                          <p style="font-size: 25px; color:#169E53;">النمل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">28. Al-Qasas</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Stories
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">القصاص</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">29. Al-’Ankabut</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Spider
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">العنكبوت</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">30. Ar-Rum</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Romans
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الروم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">31. Luqman</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Luqman family
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">لقمان</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">32. As-Sajdah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Sajdah
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">السجدة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">33. Al-Ahzab</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Allied Groups
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الأحزاب</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">34. Saba'</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Sabaeans
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;"> سابا</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">35. Fatir</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Creator
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">تير</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">36. Ya-Sin</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Yaasiin
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">ياسين</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">37. As-Saffat</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Lines
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الصافات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">38. Sad</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Letter “Saad”
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">شاد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">39. Az-Zumar</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Troops
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الزمر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">40. Ghafir</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Forgiving
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">غافر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">41. Fussilat</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Expla ined in Detail
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">فصيلات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">42. Asy-Syura</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Discussion
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الشورى</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">43. Az-Zukhruf</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Ornaments of Gold
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الزخرف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">44. Ad-Dukhan</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Fog
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الدخان</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">45. Al-Jasiyah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Knees Bend
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;"> الجاسيا</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">46. Al-Ahqaf</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Sand Dunes
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الأحقاف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">47. Muhammad</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Muhammad
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">محمد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">48. Al-Fath</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Victory
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الفتح</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">        
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">49. Al-Hujurat</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Rooms
                            </p>
                        </div>
                        <div class="col-5">
                          <p style="font-size: 25px; color:#169E53;">الحجرات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">50. Qaf</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Letter “Qaaf”
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">قاف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">51. Az-Zariyat</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Flying Wind
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الزاريات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">52. At-Tur</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Hill
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الطور</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">53. An-Najm</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Star
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">النجم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">54. Al-Qamar</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Month
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">القمر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">55. Ar-Rahman</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Most Gracious
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">رحمن </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">56. Al-Waqi’ah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Judgment Day
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الواقعية</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">57. Al-Hadid</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Iron
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;"> الحديد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">58. Al-Mujadilah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Pleading Woman
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">المجادلة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">59. Al-Hasyr</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Expulsion
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الحصر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">60. Al-Mumtahanah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Tested Woman
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الممحانة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">61. As-Saff</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The One Line
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">عساف</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">62. Al-Jumu’ah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Conggregation, Friday
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الجمعة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">63. Al-Munafiqun</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Hypocrites
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">المنافقون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">64. At-Tagabun</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Day Shows Errors
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">التجبون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">65. At-Talaq</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Divorce
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الطلاق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">66. At-Tahriim</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Prohibition
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">التحريم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">67. Al-Mulk</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Soveregnty
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الملك</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">68. Al-Qalam</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Pen
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">القلم</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">69. Al-Haqqah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Judgment Day
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الحاقة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">70. Al-Ma'arij</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Ascending Stairways
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;"> المعارج</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">71. Nuh</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Noah
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">نوح</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">72. Al-Jinn</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Jinn
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الجن</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">73. Al-Muzzammil</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Blanket Person
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">المزمل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">74. Al-Muddassir</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Cloaked One
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">المدثر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">75. Al-Qiyamah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Doomsday
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">القيامة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">76. Al-Insan</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Human
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الإنسان</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">77. Al-Mursalat</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Emissaries
                            </p>
                        </div>
                        <div class="col-5">
                          <p style="font-size: 25px; color:#169E53;">المرسلات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">78. An-Naba'</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Big news
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">النبأ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">79. An-Nazi’at</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Those who drag forth
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">النازعات</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">80. ‘Abasa</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              He is surly
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">أباسا</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">81. At-Takwir</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Roll
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;"> التكوير</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">82. Al-Infitar</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Cleaving
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الانفتار</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">83. Al-Mutaffifin</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Defrauding
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">المطففين</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">84. Al-Insiqaq</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Sundering
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الانسحاق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">85. Al-Buruj</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Mansions of the Stars
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">البروج</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">86. At-Tariq</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Nightcommer
                            </p>
                        </div>
                        <div class="col">
                          <p style="font-size: 25px; color:#169E53;">الطارق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">87. Al-A’la</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Most Hight
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الأعلى</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">88. Al-Gasyiyah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Overwhelming
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الغاشية</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">89. Al-Fajr</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Dawn
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الفجر	</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">90. Al-Balad</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Country
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">البلد</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">91. Asy-Syams</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              Those Sun
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الشمس</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">92. Al-Lail</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Night
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">اليل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">93. Ad-Duha</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Morning Hours
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;"> الضحى‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">94. Al-Insyirah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Relief
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الإنشراح‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">95. At-Tin</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Fig
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">التينِ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">96. Al-’Alaq</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Clot of Blood
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">العلق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">97. Al-Qadr</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Glory
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">القدر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">98. Al-Bayyinah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Clear Proof
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">البينة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">99. Az-Zalzalah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Eart hquake
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الزلزلة‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">100. Al-’Adiyat</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Courser
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">العاديات‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">101. Al-Qari’ah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Calamity
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">القارعة‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">102. At-Takasur</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Rivalry in world incre..
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">التكاثر‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">103. Al-’Asr</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Declining Day
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">العصر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">104. Al-Humazah</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Traducer
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الهمزة‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">105. Al-Fil</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Elephant
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;"> الفيل</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">106. Al-Quraisy</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The tribe of Quraish
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">القريش</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">107. Al-Ma’un</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Small Kindnesses
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الماعون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">108. Al-Kausar</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Abundant favors
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الكوثر</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fulid row">     
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">109. Al-Kafirun</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Unbelievers
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الكافرون</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">110. An-Nasr</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Divine Support
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">النصر‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">111. Al-Lahab</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Flaming Fire
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">اللهب‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">112. Al-Ikhlas</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Fajr Time
                            </p>
                        </div>
                        <div class="col-5">
                          <p style="font-size: 25px; color:#169E53;">الإخلاص‎‎</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">113. Al-Falaq</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Mankind
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الفلق</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card" style="border: 1px solid #DCDCDC; box-sizing: border-box; background: #FFFFFF; border-radius: 8px;"">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                            <h6 class="card-title">
                               <a href="" style="color: #2F2F2F">114. An-Nas</a>
                            </h6>
                            <p class="card-text" style="color: #ADADAD;">
                              The Mankind
                            </p>
                        </div>
                        <div class="col-4">
                          <p style="font-size: 25px; color:#169E53;">الناس</p>
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