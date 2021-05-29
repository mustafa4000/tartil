@extends('layouts.app')
@section('title','Receiter')
@section('content')
<section class="section">
    <div class="row">
      <div class="section-body">
        <h4 style="color: #2F2F2F;">Receiter</h4>
          <div class="row">
            <div class="col-1">
              <a href=""> <p style="text-align: start; color:#169E53; font-size: 16px;">All</p> </a>
            </div>
            <div class="col-2">
              <a href="" style="color:#DCDCDC; font-size: 16px;"> Hafs A'n Assem </a>
            </div>
            <div class="col-7">
              <a href="" style="color:#DCDCDC; font-size: 16px;"> Non Hafs A'n Assem </a>
            </div>
            <div class="col">
              
              <a href="" style="color: #169E53;"><i class="far fa-filter"></i> Most Popular </a>
            </div>
          </div>        
          <div>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top"  class="img-rounded" src="{{ url('/assets/imgtartil/Abdallah Kamel.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.play') }}" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdallah Kamel</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdel Aziz Al Ahmed.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.AlAhmed') }}" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdel Aziz Al Ahmed</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdelhamid Hssain - Warsh.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Warsh') }}" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdelhamid Hssain - Warsh</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdul Aziz Brown.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Brown') }}" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Aziz Brown</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdul Basit.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Basit') }}" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Basit</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/Abdul Mohsen Al Obeikan.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Obeikan') }}" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Mohsen Al Obeikan</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/salah_abudair.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="{{ route('pages.receiter.Albudair') }}" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Salah Albudair</a>
                </div>
              </div>
            </div>
            <br>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top"  class="img-rounded" src="{{ url('/assets/imgtartil/abdul_muhsin.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Muhsin Al Qasim</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdul _rahman.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Rahman Al Yusuf</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulraman.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Rahman Jamal Aloosi</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulhaneef.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Wadood Haneef</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulwali.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Wali Al Arkani</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulkabir.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdulkabir Al Hadidi</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/salah_abudair.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Salah Albudair</a>
                </div>
              </div>
            </div>
            <br>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top"  class="img-rounded" src="{{ url('/assets/imgtartil/Hani Ar-Rifai.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Hani Ar-Rifai</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdul _rahman.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Rahman Al Yusuf</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulraman.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Rahman Jamal Aloosi</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulhaneef.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Wadood Haneef</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulwali.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdul Wali Al Arkani</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/abdulkabir.jpg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Abdulkabir Al Hadidi</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" class="img-rounded" src="{{ url('/assets/imgtartil/salah_abudair.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                <div class="card-body">
                  <a href="" class="card-title" style="font-size: 14px; color:#2F2F2F; text-align: center;">Salah Albudair</a>
                </div>
              </div>
            </div>
          </div>
      </div>  
    </div>
</section>
@endsection
