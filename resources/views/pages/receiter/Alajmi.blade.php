@extends('layouts.app')

@section('title','play')

@section('content')
<section class="section">
    <h3 style="color: #2F2F2F;">Receiter</h3>
        <div class="row g-0">
          <div class="col-md-2">
            <img class="img-rounded" src="{{ url('/assets/imgtartil/Ahmed Al Ajmi.jpeg') }}" width="132px" height="132px" style="border-radius: 8px;">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title" style="color: #2F2F2F;">Ahmed Al Ajmi</h5>
              <p class="card-text" style="color: #9D9D9D;">Country: Saudi Arabia</p>
              <p class="card-text"><small class="text-muted" style="color: #9D9D9D;">Rewayat: Hafs A'n Assem</small></p>
          </div>
        </div>    
    </div>
    <br>
    <div class="row">
        <div class="col-2">
          <a href="" style="color: #169E53"> Hafs A'n Assem </a>
        </div>
        <div class="col-5">
          <a href="" style="color: #DCDCDC;"> Hafs A'n Assem </a>
        </div>
    </div>
    <br>
    <div class="row col">
        <div class="col-0">
            <i class="fas fa-play-circle fa-2x" style="color: #169E53"></i>
        </div>
        <div class="col">
            <h4 style="color: #2F2F2F;">Play all</h4>
        </div>
    </div>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col" style="color: #9D9D9D; background: white;">Sura Name</th>
            <th scope="col" style="color: #9D9D9D; background: white;">Duraiton</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
              <a onClick="togglePlay()">  <i class="fas fa-play" style="color:#169E53;"></i></a> 
              <audio id="Audio" src="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}"></audio>
              <a href="" style="font-size: 16px; color:#2F2F2F">1. Al-Fatiha( The Opener )</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">2. Al-Baqarah (The Cow)</a>
            </th>            
            <td class="row">
              <div class="kotakwaktu col-2">
                <span id="waktusekarang" id="durasi">0:00:00</span>
              </div>
              
              <div class="btn-group dropleft col-2">
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
              <div class="btn-group dropleft col-2">
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
              <div class="btn-group dropleft col-2">
                <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                </a>
                <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a class="dropdown-item" href="#"> 
                    <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                      Share
                    </a>
                    <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                      <a class="dropdown-item" href="#"> 
                        <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                      </a>
                      <a class="dropdown-item" href="#">
                         <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                      </a>
                      <a class="dropdown-item" href="#"> 
                         <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                      </a>
                      <a class="dropdown-item" href="#">
                         <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                      </a>
                      <a class="dropdown-item" href="#"> 
                         <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                      </a>
                    </div>
                  </a>
                  <a class="dropdown-item" href="#"> 
                    <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                      Download
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
                  </a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">3. Ali-Imran (Family  of Imran)</a>
            </th>            
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">4. An-Nisa (The Women)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">5. Al-Maidah (The Table Spread)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">6. Al-An’am (The Cattle)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">7. Al-A’raf (The Heights)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">8. Al-Anfal (The Spoils of War)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">9. At-Tawbah (The Repetance)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">10. Yunus (Yonah)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">11. Hud (Hud)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">12. Yusuf (Joseph)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">13. Ar-Rad (The Thunder)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">14. Ibrahim (Abraham)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">15.  Al-Hijr (The Rockry Tract)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">16. An-Nahl (The Bee)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">17. Al-Isra (The Night Journey)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">18. Al-Kafh (The Cave)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>

          <tr>
            <th scope="row">
                <a href=""><i class="fas fa-play" style="color:#169E53;"></i></a>
                <a href="" style="font-size: 16px; color:#2F2F2F">19. Mary (Maryam)</a>
            </th>
            <td class="row">
                <div class="kotakwaktu col-2">
                  <span id="waktusekarang" id="durasi">0:00:00</span>
                </div>
                
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
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
                <div class="btn-group dropleft col-2">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> 
                        Share
                      </a>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"> 
                          <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                        </a>
                        <a class="dropdown-item" href="#">
                           <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                        </a>
                        <a class="dropdown-item" href="#"> 
                           <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                        </a>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> 
                        Download
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
                    </a>
                  </div>
                </div>
              </td>
          </tr>
        </tbody>
    </table>
    <br><br>
    <b style="color: #2F2F2F;">About Ahmed Al Ajmi</b>
    <p style="color: #2F2F2F;">Ahmed Al Ajmi was born in 1968, Ahmed Ibn Ali Ibn Mohammed Al Sulaiman Al Ajmi alias Ahmed Ali Al Ajmi is a Quran reciter from Khobar, Saudi Arabia.</p>
    <p style="color: #2F2F2F;">He received his primary education from 'Al Mohammedia' elementary school, which is located south of Al Khobar. He pursued his high school education at 'Azoubair Ibn Awam' high school.</p>
    <p style="color: #2F2F2F;">After graduating from Mohammed Bin Saud Islamic University, he enrolled at Lahore State University, Pakistan for a Master's degree and later a Doctorate in Interpretation of the Koran.</p>
    <p style="color: #2F2F2F;">He also obtained a license in Islamic Sharia at Al-Imam Mohammed Ibn Saoud University.</p>
    <p style="color: #2F2F2F;">Sheikh Ahmed Ajmi enjoys excellence in the world of recitation. He started his Imamate in 1984 at the Al Moghira Bin Shouaba Mosque and continued at the Great Mosque of Khobar in 1985. His recruitment as Imam took place at the Al Ahmed Bin Fahd Mosque in Khobar in 1992.</p>
    <p style="color: #2F2F2F;">The excellence of his prominent voice made him produce several albums such as: "Wadaânak", "Anashid" and so on.</p>
    <p style="color: #2F2F2F;">The next big step will be the emergence of large conferences and television and radio programs on several stations, which discuss topics related to Islam.</p>
    <p style="color: #2F2F2F;">Ahmed Al Ajmi saat ini menjabat sebagai Imam di Masjid Suci Raja Fahd Jeddah.</p>
</section>
@endsection