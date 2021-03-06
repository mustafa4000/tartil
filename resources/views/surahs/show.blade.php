@extends('layouts.app')

@section('title','Favorite')

@section('content')
<section class="section">
  {{-- <div class="row"> --}}
  <div class="section-body">
    <h4 style="color: #2F2F2F">{{ $surah->name }}</h4>
    <div class="row ml-auto">
        <div class="mr-5">
          <a href=""> <p style="text-align: start; color:#169E53; font-size: 16px;">All</p> </a>
        </div>
        <div class="mr-5">
          <a href="" style="color:#DCDCDC; font-size: 16px;"> Hafs A'n Assem </a>
        </div>
        <div class="col-8 ml-auto">
          <a href="" style="color:#DCDCDC; font-size: 16px;"> Non Hafs A'n Assem </a>
        </div>
        <div class="col">
          <div class="btn-group dropleft">
            <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-filter" style="color: #169E53;">Shortes</i>  
            </a>
            <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
              <a class="dropdown-item" href="#">From A-Z</a>
              <a class="dropdown-item" href="#">From Z-A</a>
              <a class="dropdown-item" href="#">Shortest Duration</a>
              <a class="dropdown-item" href="#">Longest Duration</a>
            </div>
          </div>
        </div>
      </div>      
    <table class="table">
      <thead>
        <tr>
          <th scope="col" style="color: #9D9D9D; background: white;"></th>
          <th scope="col" style="color: #9D9D9D; background: white;">Qori Murottal</th>
          <th scope="col" style="color: #9D9D9D; background: white;">Rewayat</th>
          <th scope="col" style="color: #9D9D9D; background: white;">Durasi</th>
        </tr>
      </thead>
      <tbody>
          @for ($i = 0; $i < $surah->reciters()->count(); $i++)
            <?php $reciter = $surah->reciters[$i] ?>
            <?php $murotal = $surah->murotals[$i] ?>
            {{-- {{ dd($murotals) }} --}}
            <tr>
              <th scope="row">
                <a onClick="togglePlay()">  <i class="fas fa-play" style="color:#169E53;"></i></a> 
                <audio id="Audio" src="{{ url($murotal->file) }}"></audio>
              </th>
              <td>
                  <a href="" style="font-size: 16px; color:#2F2F2F"> {{ $reciter->name }} </a>
              </td>
              <td> 
                @foreach ($reciter->riwayats as $riwayat)
                    {{ $riwayat->name }},
                @endforeach
              </td>
              <td class="row align-items-center">
                <div class="btn-group dropleft col">
                  <span id="waktusekarang" id="durasi">{{ $murotal->duration }}</span>
                </div>
                
                <div class="btn-group dropleft col">
                  <a href="#">
                    <i class="fas fa-align-justify" style="color: #2F2F2F;"></i> 
                  </a>
                </div>
                <div class="btn-group dropleft col">
                  <a href="{{ route('pages.favorite') }}">
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
            </tr>
          @endfor
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