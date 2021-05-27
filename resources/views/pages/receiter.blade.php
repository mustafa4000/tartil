@extends('layouts.app')
@section('title','Receiter')
@section('content')
<section class="section">
    <div class="row">
      <div class="section-body">
        <h4 style="color: black">Receiter</h4>
          <div class="row">
            <div class="col-1">
              <a href=""> <p style="text-align: start; color:green;">All</p> </a>
            </div>
            <div class="col-2">
              <a href="" style="color: black"> Hafs A'n Assem </a>
            </div>
            <div class="col-7">
              <a href="" style="color: black"> Non Hafs A'n Assem </a>
            </div>
            <div class="col">
              
              <a href="" style="color: green;"><i class="far fa-filter"></i> Most Popular </a>
            </div>
          </div>        
          <div>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top"  class="img-rounded" src="{{ url('/assets/imgtartil/Abdallah Kamel.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.play') }}" class="card-title" style="text-align: center; color:black;; color:black">Abdallah Kamel</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdel Aziz Al Ahmed.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.AlAhmed') }}" class="card-title" style="text-align: center; color:black;">Abdel Aziz Al Ahmed</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdelhamid Hssain - Warsh.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Warsh') }}" class="card-title" style="text-align: center; color:black;">Abdelhamid Hssain - Warsh</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdul Aziz Brown.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Brown') }}" class="card-title" style="text-align: center; color:black;">Abdul Aziz Brown</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdul Basit.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Basit') }}" class="card-title" style="text-align: center; color:black;">Abdul Basit</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdul Mohsen Al Obeikan.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Obeikan') }}" class="card-title" style="text-align: center; color:black;">Abdul Mohsen Al Obeikan</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/salah_abudair.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Albudair') }}" class="card-title" style="text-align: center; color:black;">Salah Albudair</a>
                </div>
              </div>
            </div>
            <br>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top"  class="img-rounded" src="{{ url('/assets/imgtartil/abdul_muhsin.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdul Muhsin Al Qasim</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdul _rahman.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdul Rahman Al Yusuf</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulraman.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdul Rahman Jamal Aloosi</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulhaneef.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdul Wadood Haneef</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulwali.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdul Wali Al Arkani</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulkabir.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdulkabir Al Hadidi</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/salah_abudair.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Salah Albudair</a>
                </div>
              </div>
            </div>
            <br>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top"  class="img-rounded" src="{{ url('/assets/imgtartil/Hani Ar-Rifai.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Hani Ar-Rifai</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdul _rahman.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdul Rahman Al Yusuf</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulraman.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdul Rahman Jamal Aloosi</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulhaneef.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdul Wadood Haneef</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulwali.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdul Wali Al Arkani</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulkabir.jpg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Abdulkabir Al Hadidi</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/salah_abudair.jpeg') }}" width="304" height="150" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="text-align: center; color:black;">Salah Albudair</a>
                </div>
              </div>
            </div>
          </div>
      </div>  
    </div>
</section>
@endsection
