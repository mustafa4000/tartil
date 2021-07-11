@extends('layouts.app')
@section('title','Receiter')
@section('content')
<section class="section"> 
    <div class="row">
      <div class="section-body">
        <h4 style="color: #2F2F2F;">Receiter</h4>
          <div class="row">
            <div class="mr-5">
              <a href=""> <p style="text-align: start; color:#169E53; font-size: 16px;">All</p> </a>
            </div>
            <div class="mr-5">
              <a href="" style="color:#DCDCDC; font-size: 16px;"> Hafs A'n Assem </a>
            </div>
            <div class="mr-5">
              <a href="" style="color:#DCDCDC; font-size: 16px;"> Non Hafs A'n Assem </a>
            </div>  
            <div style="margin-left: 55rem;">
              <div class="btn-group dropleft">
                <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-filter" style="color: #169E53;">Most Popular</i>  
                </a>
                <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a class="dropdown-item" href="#">From A-Z</a>
                  <a class="dropdown-item" href="#">From Z-A</a>
                  <a class="dropdown-item" href="#">Most Popular</a>
                </div>
              </div>
            </div>
          </div>
                
          @foreach ($reciters as $reciter)
            <div class="card" style="width: 11rem;">
              <img src="{{ $reciter['image'] }}" class="card-img-top" class="img-rounded" width="132px" height="132px" class="card-img-top" style="border-radius: 8px; object-fit: cover;" alt="Card image cap">
              <br>
              <a href="{{ route('reciters.show', ['slug' => $reciter->slug] ) }}" style="font-size: 11px; color:#2F2F2F; text-align: center;">{{ $reciter->name }}</a>
            </div>
          @endforeach
      </div>  
    </div>
</section>
@endsection
