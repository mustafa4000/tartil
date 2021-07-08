@extends('layouts.app')

@section('title','user')

@section('content')
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
              <td><a style="font-size: 16px; color:#2F2F2F">Al-Fatiha( The Opener )</a> </td>
              <td> <a href="" style="font-size: 16px; color:#2F2F2F">Abdallah Kamel</a></td>
              <td> <a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
@endsection