@extends('layouts.app')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <a href="" style="color: black;">Find surah for your playlist</a>
        </div>
        {{-- <div class="float-right">
            <a class="btn btn-success" href="{{ route('posts.create') }}"> Create Post</a>
        </div> --}}
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
            <i class="fas fa-play" style="color:#169E53;"></i> 
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
        <td><a style="font-size: 16px; color:#2F2F2F">Al-Fatiha( The Opener )</a></td>
        <td> <a href="{{ route('pages.receiter.play') }}" style="font-size: 16px; color:#2F2F2F">Abdallah Kamel</a></td>
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
            <i class="fas fa-play" style="color:#169E53;"></i> 
          </a>
          <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
            <a class="dropdown-item" href="#">
              <div class="row container-fluid">
                <div class="col">
                  <img src="{{ url('/assets/imgtartil/Abdel Aziz Al Ahmed.jpeg') }}" width="50" alt="">
                  <b>Al-Maidah( The Table Spread )</b>  
                  <b>Abdel Aziz Al Ahmed</b>  
                </div>
                <div class="col">
                  <audio controls> 
                    <source src="{{ url('/assets/audio/Sourat Al Maidah oleh Abdel Aziz Al Ahmed.mp3') }}" type="audio/mpeg"> 
                  </audio>
                </div>
              </div>
            </a>
          </div>
        </th>
        <td><a style="font-size: 16px; color:#2F2F2F">Al-Maidah( The Table Spread )</a></td>
        <td><a href="{{ route('pages.receiter.AlAhmed') }}" style="font-size: 16px; color:#2F2F2F">Abdel Aziz Al Ahmed</a></td>
        <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
            <i class="fas fa-play" style="color:#169E53;"></i> 
          </a>
          <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
            <a class="dropdown-item" href="#">
              <div class="row container-fluid">
                <div class="col">
                  <img src="{{ url('/assets/imgtartil/Abdelhamid Hssain - Warsh.jpeg') }}" width="50" alt="">
                  <b>Al-Kahf (The Cave)</b>  
                  <b>Abdelhamid Hssain - Warsh</b>  
                </div>
                <div class="col">
                  <audio controls> 
                    <source src="{{ url('/assets/audio/Surah AlKahf The Cave Jamal Shaker Abdullah_ Quran Recitation.mp3') }}" type="audio/mpeg"> 
                  </audio>
                </div>
              </div>
            </a>
          </div>
        </th>
        <td><a style="font-size: 16px; color:#2F2F2F">Al-Kahf( The Cave )</a></td>
        <td><a href="{{ route('pages.receiter.Warsh') }}" style="font-size: 16px; color:#2F2F2F">Abdelhamid Hssain - Warsh</a></td>
        <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
            <i class="fas fa-play" style="color:#169E53;"></i> 
          </a>
          <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
            <a class="dropdown-item" href="#">
              <div class="row container-fluid">
                <div class="col">
                  <img src="{{ url('/assets/imgtartil/Abdul Aziz Brown.jpg') }}" width="50" alt="">
                  <b>Al-Kahf (The Cave)</b>  
                  <b>Abdul Aziz Brown</b>  
                </div>
                <div class="col">
                  <audio controls> 
                    <source src="{{ url('/assets/audio/Mohammad Saleh Alim Shah  Surah ArRahman.mp3') }}" type="audio/mpeg"> 
                  </audio>
                </div>
              </div>
            </a>
          </div>
        </th>
        <td><a style="font-size: 16px; color:#2F2F2F">Al-Rahman( The Beneficent )</a></td>
        <td><a href="{{ route('pages.receiter.Brown') }}" style="font-size: 16px; color:#2F2F2F">Abdul Aziz Brown</a></td>
        <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
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
    </tbody>
</table>  

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h5 ">Find surah for your playlist </h5>
                {{-- <a style="color: black; href="{{ route('posts.edit',$post->id) }}">Edit</a>             --}}
        </div>  
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('posts.create') }}"> Create Post</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

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
        @foreach ($posts as $post)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td style="font-size: 16px; color:#2F2F2F;">{{ $post->surat }}</td>
            <td style="font-size: 16px; color:#2F2F2F;">{{ $post->nama }}</td>
            <td style="font-size: 16px; color:#2F2F2F;">{{ $post->rewayat }}</td>
            <td class="text-center">
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    <div class="row">
                        <div class="col">
                            <span>0:00:00</span>
                        </div>
                        <div class="col">
                            <a class="btn bg-transparent" href="{{ route('posts.create') }}"><i class="fas fa-plus-circle" style="color: #169E53;"></i>  Add</a>
                        </div>
                    </div>
                    {{-- <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Show</a> --}}
                    
                    {{-- <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> --}}
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $posts->links() !!}

@endsection