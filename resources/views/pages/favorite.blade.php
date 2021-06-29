@extends('layouts.app')

@section('title','Favorite')

@section('content')
<section class="section">
  {{-- <div class="row"> --}}
  <div class="section-body">
    <h4 style="color: #2F2F2F">Favorite</h4>
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
            <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <i class="fas fa-play" style="color:#169E53;"></i>  --}}
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
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Fatihah (The Opener)</a></td>
          <td> <a href="" style="font-size: 16px; color:#2F2F2F">Abdallah Kamel</a></td>
          <td> <a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
          <td class="row">
            <div class="col-10">
              <span>0:00:00</span>
            </div>

            <div class="btn-group dropleft">
              <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
              </a>
              <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                  Share

                  <div class="dropdown-menu dropleft " x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large">
                      <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                        <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                      </a>
                    </div>
                    <a class="dropdown-item" href="#">
                       <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                    </a>
                    
                    <a class="dropdown-item" href="#"> 
                       <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                    </a>
                    {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button dropdown-item" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    <a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button">
                       <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                    </a>
                    <a class="dropdown-item" href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"> 
                       <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                    </a>
                  </div>  
                </a>
                <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                  Download
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Trash.png') }}" width="15" alt=""> Delete
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <i class="fas fa-play" style="color:#169E53;"></i>  --}}
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
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Maidah( The Table Spread )</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hani Ar-Rifai</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
          <td class="row">
            <div class="kotakwaktu col-10">
              <span id="waktusekarang" id="durasi">0:00:00</span>
            </div>
            
            <div class="btn-group dropleft">
              <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
              </a>
              <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                  Share

                  <div class="dropdown-menu dropleft " x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large">
                      <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                        <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                      </a>
                    </div>
                    <a class="dropdown-item" href="#">
                       <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                    </a>
                    
                    <a class="dropdown-item" href="#"> 
                       <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                    </a>
                    {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button dropdown-item" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    <a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button">
                       <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                    </a>
                    <a class="dropdown-item" href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"> 
                       <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                    </a>
                  </div>  
                </a>
                <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                  Download
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Trash.png') }}" width="15" alt=""> Delete
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <i class="fas fa-play" style="color:#169E53;"></i>  --}}
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
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Maryam (Mary)</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hani Ar-Rifai</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
          <td class="row">
            <div class="kotakwaktu col-10">
              <span id="waktusekarang" id="durasi">0:00:00</span>
            </div>
            
            <div class="btn-group dropleft">
              <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
              </a>
              <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                  Share

                  <div class="dropdown-menu dropleft " x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large">
                      <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                        <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                      </a>
                    </div>
                    <a class="dropdown-item" href="#">
                       <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                    </a>
                    
                    <a class="dropdown-item" href="#"> 
                       <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                    </a>
                    {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button dropdown-item" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    <a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button">
                       <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                    </a>
                    <a class="dropdown-item" href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"> 
                       <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                    </a>
                  </div>  
                </a>
                <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                  Download
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Trash.png') }}" width="15" alt=""> Delete
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <i class="fas fa-play" style="color:#169E53;"></i>  --}}
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
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-’Adiyat (The Courser)</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdel Aziz Al Ahmed</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
          <td class="row">
            <div class="kotakwaktu col-10">
              <span id="waktusekarang" id="durasi">0:00:00</span>
            </div>
            
            <div class="btn-group dropleft">
              <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
              </a>
              <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                  Share

                  <div class="dropdown-menu dropleft " x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large">
                      <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                        <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                      </a>
                    </div>
                    <a class="dropdown-item" href="#">
                       <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                    </a>
                    
                    <a class="dropdown-item" href="#"> 
                       <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                    </a>
                    {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button dropdown-item" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    <a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button">
                       <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                    </a>
                    <a class="dropdown-item" href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"> 
                       <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                    </a>
                  </div>  
                </a>
                <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                  Download
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Trash.png') }}" width="15" alt=""> Delete
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <i class="fas fa-play" style="color:#169E53;"></i>  --}}
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
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Kahf( The Cave )</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdul Basit</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
          <td class="row">
            <div class="kotakwaktu col-10">
              <span id="waktusekarang" id="durasi">0:00:00</span>
            </div>
            
            <div class="btn-group dropleft">
              <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
              </a>
              <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                  Share

                  <div class="dropdown-menu dropleft " x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large">
                      <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                        <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                      </a>
                    </div>
                    <a class="dropdown-item" href="#">
                       <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                    </a>
                    
                    <a class="dropdown-item" href="#"> 
                       <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                    </a>
                    {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button dropdown-item" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    <a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button">
                       <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                    </a>
                    <a class="dropdown-item" href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"> 
                       <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                    </a>
                  </div>  
                </a>
                <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                  Download
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Trash.png') }}" width="15" alt=""> Delete
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <i class="fas fa-play" style="color:#169E53;"></i>  --}}
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
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Kahf( The Cave )</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Maher Al-Mueaqly</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
          <td class="row">
            <div class="kotakwaktu col-10">
              <span id="waktusekarang" id="durasi">0:00:00</span>
            </div>
            
            <div class="btn-group dropleft">
              <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
              </a>
              <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                  Share

                  <div class="dropdown-menu dropleft " x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large">
                      <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                        <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                      </a>
                    </div>
                    <a class="dropdown-item" href="#">
                       <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                    </a>
                    
                    <a class="dropdown-item" href="#"> 
                       <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                    </a>
                    {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button dropdown-item" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    <a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button">
                       <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                    </a>
                    <a class="dropdown-item" href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"> 
                       <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                    </a>
                  </div>  
                </a>
                <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                  Download
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Trash.png') }}" width="15" alt=""> Delete
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <i class="fas fa-play" style="color:#169E53;"></i>  --}}
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
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Humazah ( The Traduser )</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdul Muhsin Al Qasim</a></td>
          <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
          <td class="row">
            <div class="kotakwaktu col-10">
              <span id="waktusekarang" id="durasi">0:00:00</span>
            </div>
            
            <div class="btn-group dropleft">
              <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
              </a>
              <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                  <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                  Share

                  <div class="dropdown-menu dropleft " x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large">
                      <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                        <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                      </a>
                    </div>
                    <a class="dropdown-item" href="#">
                       <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                    </a>
                    
                    <a class="dropdown-item" href="#"> 
                       <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                    </a>
                    {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button dropdown-item" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                    <a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button">
                       <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                    </a>
                    <a class="dropdown-item" href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"> 
                       <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                    </a>
                  </div>  
                </a>
                <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                  Download
                </a>
                <a class="dropdown-item" href="#"> 
                  <img src="{{ url('/assets/img/Trash.png') }}" width="15" alt=""> Delete
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