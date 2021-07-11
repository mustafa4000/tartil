@extends('layouts.app')

@section('title','Playlist')
@section('content')
<section class="section">
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
            <th scope="col" style="color: #9D9D9D; background: white;">Duration</th>
          </tr>
        </thead>
        <tbody>

            <tr>
              <th scope="row">
                <a onClick="togglePlay()">  <i class="fas fa-play" style="color:#169E53;"></i></a> 
                <audio id="Audio" src=""></audio>
                {{-- {{ $reciters[$key]->image}} --}}
              </th>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">{{ $playlist->name }}</a></td>
              <td> 
                <a href="" style="font-size: 16px; color:#2F2F2F"> 

                </a>
              </td>
              <td> <a href="" style="font-size: 16px; color:#2F2F2F"></a></td>
              <td class="row align-items-center">
                <div class="btn-group dropleft col">
                  <span id="waktusekarang" id="durasi">0::00</span>
                </div>
                
                <div class="btn-group dropleft col">
                  <a href="#">
                    <i class="fas fa-align-justify" style="color: #2F2F2F;"></i> 
                  </a>
                </div>
                <div class="btn-group dropleft col">
                  <a href="#">
                    <i class="far fa-star" style="color: #2F2F2F;"></i>
                  </a>
                </div>
                <div class="btn-group dropleft col">
                  <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                  </a>
                  <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"> 
                      <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> Share
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> Download
                    </a>
                    <a class="dropdown-item" href="#"> 
                      <img src="{{ url('/assets/img/Trast.png') }}" width="15" alt=""> Hapus
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