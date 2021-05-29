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
              <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i> </th>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Fatiha( The Opener )</a></td>
              <td> <a href="" style="font-size: 16px; color:#2F2F2F">Hani Ar-Rifai</a></td>
              <td> <a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i></th>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Maidah( The Table Spread )</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Hani Ar-Rifai</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i></th>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Maryam (Mary)</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Hani Ar-Rifai</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                <a  href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i></th>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-’Adiyat (The Courser)</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdel Aziz Al Ahmed</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i></th>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Kahf( The Cave )</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdul Basit</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i></th>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Kahf( The Cave )</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Maher Al-Mueaqly</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:#169E53;"></i></th>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Al-Humazah ( The Traduser )</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Abdul Muhsin Al Qasim</a></td>
              <td><a href="" style="font-size: 16px; color:#2F2F2F">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: #2F2F2F;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: #2F2F2F;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            </tbody>
        </table>
      </div>  
</section>
@endsection
