@extends('layouts.app')

@push('after-style')
    
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>

@endpush

@section('content')  
<!-- Main Content -->
<section class="section">
    <div class="section-body">
        <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3 style="color: #2F2F2F;">Home</h3>
            <h5 style="color: #2F2F2F;">Top Playing</h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col col-sm-1" style="color: #9D9D9D; background: white;">Sura Name</th>
                    <th scope="col col-sm-1" style="color: #9D9D9D; background: white;">Reciter</th>
                    <th scope="col col-sm-1" style="color: #9D9D9D; background: white;">Rewayat</th>
                    <th scope="col col-sm-1" style="color: #9D9D9D; background: white;">Duraiton</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($playlists as $key=> $playslist)
                    <th scope="row">
                        <a type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="{{ url('/assets/img/Vector.png') }}" width="15" alt="">
                        </a>
                        <div
                        class="dropdown-menu"
                        style="
                        position: fixed !important;
                        top: 27rem !important;
                        left: 0;
                        width: 56rem;"
                            >
                            <a class="dropdown-item" href="#">
                                <div class="row container-fluid">
                                    <div class="col d-flex align-items-center p-0 m-0">
                                        <img src="{{ $reciters[$key]->image}}"
                                            width="50" alt="">
                                        <p class="ml-3 m-0">{{$playlists[$key]->name}}</p>
                                    </div>
                                    <div class="col-md-8">
                                        <audio controls style="width: 100%;">
                                            <source src="{{ url($murotals[$key]->file) }}"
                                                type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </th>
                    <td> 
                        <a href=""
                            style="font-size: 16px; color:#2F2F2F">{{ $playslist->name }}
                        </a> 
                    </td>
                    @endforeach
                    @foreach ($reciters as $key => $reciter)
                    <td>
                        <a href="{{ route('reciters.show', ['slug' => $reciter->slug] ) }}"style="font-size: 16px; color:#2F2F2F">
                        {{ $reciter->name }} 
                        </a>
                    </td>
                    @foreach($reciter->riwayats as $riwayat)
                    <td>
                        <a href="{{ route('riwayats.show', ['slug' => $riwayat->slug] ) }}" style="font-size: 16px; color:#2F2F2F"> 
                        {{ $riwayat->name }} 
                        </a>
                    </td>
                    @endforeach
                    @endforeach
                    <td class="row align-items-center">
                        @foreach ($playlists as $playslist)
                        <div class="btn-group dropleft col">
                            <a href="{{ route('playlists.show', ['slug' => $playslist->slug] ) }}">
                                <i class="fas fa-align-justify" style="color: #2F2F2F;"></i>
                            </a>
                        </div>
                        @endforeach
                        <div class="btn-group dropleft col">
                            <a href="">
                                <i class="fas fa-align-justify" style="color: #2F2F2F;"></i>
                            </a>
                        </div>
                        <div class="btn-group dropleft col">
                            <a href="{{ route('pages.favorite') }}">
                                <i class="far fa-star" style="color: #2F2F2F;"></i>
                            </a>
                        </div>
                        <div class="btn-group dropleft col">
                            <a type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                            </a>
                            <div class="dropdown-menu dropleft" x-placement="left-start"
                                style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#" type="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img src="{{ url('/assets/img/Share.png') }}" width="15" alt="">
                                    Share

                                    <div class="dropdown-menu dropleft" x-placement="left-start"
                                        style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" target="_blank"
                                            data-href="https://developers.facebook.com/docs/plugins/"
                                            data-layout="button" data-size="large"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                                            class="fb-xfbml-parse-ignore">
                                            <img src="{{ url('/assets/img/fb.png') }}" width="10"
                                                alt=""> Facebook
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <img src="{{ url('/assets/img/instagram.png') }}"
                                                width="15" alt=""> Instagram
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <img src="{{ url('/assets/img/Telegram.png') }}"
                                                width="15" alt=""> Telegram
                                        </a>

                                        <a class="dropdown-item"
                                            href="https://twitter.com/share?ref_src=twsrc%5Etfw"
                                            class="twitter-share-button">
                                            <img src="{{ url('/assets/img/Twitter.png') }}"
                                                width="15" alt=""> Twitter
                                        </a>

                                        <a class="dropdown-item" href="whatsapp://send?text=<URL>"
                                            data-action="share/whatsapp/share"
                                            onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                            target="_blank" title="Share on whatsapp">
                                            <img src="{{ url('/assets/img/Whatsapp.png') }}"
                                                width="15" alt=""> Whatsapps
                                        </a>
                                    </div>
                                </a>
                                <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}"
                                    class="dropdown-item"
                                    download="Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3">
                                    <img src="{{ url('/assets/img/Download.png') }}" width="15"
                                        alt="">
                                    Download
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div>
            <div class="row">
                <div class="col">
                    <h5 style="color: #2F2F2F">Most Popular Reciter</h5>
                </div>
                <div class="col">
                    <a href="{{ route('pages.receiter') }}">
                        <p style="text-align: end; color:#169E53;">See all</p>
                    </a>
                </div>
            </div>
            <div class="slider">
                @foreach ($reciters as $reciter)
                <div class="card w3-white w3-hover-shadow" style="width: 18rem;">
                    <img src="{{ $reciter->image_url }}" class="card-img-top" alt="...">
                    <div class="m-3 text-center">
                        <div class="card-title">
                            <a href="{{ route('reciters.show', ['slug' => $reciter->slug] ) }}"
                                style="font-size: 11px; color:#2F2F2F; text-align: center;">{{ $reciter->name }}
                            </a>
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
                                    <a href="{{ route('surah.show', ['slug' => $surah->slug] ) }}"
                                        style="color: #2F2F2F">{{ $i }}. {{ $surah->name }}</a>
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
        </div>
    </div>    
</section>
@endsection

@push('after-script')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            slidesToShow: 7,
            slidesToScroll: 1,
        });
    });
</script>
@endpush
