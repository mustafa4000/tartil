@extends('layouts.app')

@section('title','Playlist')

@section('content')
<section class="section">
  {{-- <div class="row"> --}}
  <div class="section-body">
    <h4 style="color: #2F2F2F">Playlist</h4>
    <div class="row col">
      <div class="col-0">
          <i class="fas fa-play-circle fa-2x" style="color: #169E53"></i>
      </div>
      <div class="col">
          <h4 style="color: #2F2F2F">Play all</h4>
      </div>
    </div>
    <table class="table">
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
          <th scope="row">
            <a onClick="togglePlay()">  <i class="fas fa-play" style="color:#169E53;"></i></a> 
            
            <audio id="Audio" src="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}"></audio>
            {{-- <audio controls autoplay="true">
              <source src="" type="audio/mpeg">
            </audio> --}}
          </th>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Fatiha( The Opener )</a></td>
          <td> <a href="" style="font-size: 16px; color:#2F2F2F">Hani Ar-Rifai</a></td>
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
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Share.png') }}" width="15" alt=""> Share
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Download.png') }}" width="15" alt=""> Download
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"><a href=""><i class="fas fa-play" style="color:#169E53;"></i></a></th>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Maidah( The Table Spread )</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hani Ar-Rifai</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Share.png') }}" width="15" alt=""> Share
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Download.png') }}" width="15" alt=""> Download
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"><a href=""><i class="fas fa-play" style="color:#169E53;"></i></a></th>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Maryam (Mary)</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hani Ar-Rifai</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Share.png') }}" width="15" alt=""> Share
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Download.png') }}" width="15" alt=""> Download
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"><a href=""><i class="fas fa-play" style="color:#169E53;"></i></a></th>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-’Adiyat (The Courser)</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdel Aziz Al Ahmed</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Share.png') }}" width="15" alt=""> Share
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Download.png') }}" width="15" alt=""> Download
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"><a href=""><i class="fas fa-play" style="color:#169E53;"></i></a></th>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Kahf( The Cave )</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdul Basit</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Share.png') }}" width="15" alt=""> Share
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Download.png') }}" width="15" alt=""> Download
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"><a href=""><i class="fas fa-play" style="color:#169E53;"></i></a></th>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Kahf( The Cave )</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Maher Al-Mueaqly</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Share.png') }}" width="15" alt=""> Share
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Download.png') }}" width="15" alt=""> Download
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row"><a href=""><i class="fas fa-play" style="color:#169E53;"></i></a></th>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Humazah ( The Traduser )</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdul Muhsin Al Qasim</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Share.png') }}" width="15" alt=""> Share
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/imgtartil/Download.png') }}" width="15" alt=""> Download
                </a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>  
</section>
@endsection

@push('before-script')
<script type="text/javascript">
  var myAudio = document.getElementById("Audio");
  var isPlaying = false;
  function togglePlay() {
      myAudio.play();
      terakhir = document.querySelector('#box');
    terakhir.classList.add('hide');
      
  };
  
</script>
@endpush