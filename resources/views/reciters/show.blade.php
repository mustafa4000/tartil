@extends('layouts.app')
@section('title','Receiter')
@section('content')
<section class="section">
  <h3 style="color: hsl(0, 0%, 18%);">Receiter</h3>
      <div class="row">
        <div class="mr-1">
          <img class="img-rounded" src="{{ $reciter->image_url }}" width="132px" height="132px" style="border-radius: 8px; object-fit: cover;">
        </div>
        <div class="mr-3">
          <div class="card-body">
            <h5 class="card-title" style="color: #2F2F2F;">{{ $reciter->name }}</h5>
            <p class="card-text" style="color: #9D9D9D;">Country: {{ $reciter->country }}</p>
            <p class="card-text"><small class="text-muted" style="color: #9D9D9D;">Rewayat:  @foreach($reciter->riwayats as $riwayat) {{ $riwayat->name }} @endforeach </small></p>
        </div>
      </div>    
  </div>
  <br>
  <div class="row">
    @foreach ($reciter->riwayats as $riwayat)
      <div class="mr-5">
        <a href="" style="color: #169E53"> {{ $riwayat->name }} </a>
      </div>
    @endforeach
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
          <th scope="col" style="color: #9D9D9D; background: white; width: 16px;"></th>
          <th scope="col" style="color: #9D9D9D; background: white;">Sura Name</th>
          <th scope="col" style="color: #9D9D9D; background: white;">Duration</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < $reciter->count(); $i++)
        <?php $surah = $reciter->surahs[$i] ?>
        <?php $murotal = $reciter->murotals[$i] ?>
        <tr>
          <th scope="row">
            <a onClick="togglePlay()">  <i class="fas fa-play" style="color:#169E53;"></i></a>            
          </th>
          <td>
            <audio id="Audio" src="{{ url($murotal->file) }}"></audio>
            <a href="" style="font-size: 16px; color:#2F2F2F">{{ $surah->name }}</a>
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
  <br>
  <b style="color: #2F2F2F;">About {{ $reciter->name }}</b>
  <p style="color: #2F2F2F;">{{ $reciter->description }}</p>
</section>
@endsection
