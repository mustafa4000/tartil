@extends('layouts.app')

@section('title','Favorite')

@section('content')
<section class="section">
    {{-- <div class="row"> --}}
      <div class="section-body">
        <h4 style="color: black">Favorite</h4>
        <div class="row col">
          <div class="col-0">
              <i class="fas fa-play-circle fa-2x" style="color: green"></i>
          </div>
          <div class="col">
              <h4 style="color: black">Play all</h4>
          </div>
      </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Sura Name</th>
              <th scope="col">Reciter</th>
              <th scope="col">Rewayat</th>
              <th scope="col">Duraiton</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:green;"></i> </th>
              <td><a href="" style="font-size: 16px; color:black">Al-Fatiha( The Opener )</a></td>
              <td> <a href="" style="font-size: 16px; color:black">Hani Ar-Rifai</a></td>
              <td> <a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: black;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:green;"></i></th>
              <td><a href="" style="font-size: 16px; color:black">Al-Maidah( The Table Spread )</a></td>
              <td><a href="" style="font-size: 16px; color:black">Hani Ar-Rifai</a></td>
              <td><a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: black;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:green;"></i></th>
              <td><a href="" style="font-size: 16px; color:black">Maryam (Mary)</a></td>
              <td><a href="" style="font-size: 16px; color:black">Hani Ar-Rifai</a></td>
              <td><a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                <a  href="" style="color: black;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:green;"></i></th>
              <td><a href="" style="font-size: 16px; color:black">Al-’Adiyat (The Courser)</a></td>
              <td><a href="" style="font-size: 16px; color:black">Abdel Aziz Al Ahmed</a></td>
              <td><a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: black;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:green;"></i></th>
              <td><a href="" style="font-size: 16px; color:black">Al-Kahf( The Cave )</a></td>
              <td><a href="" style="font-size: 16px; color:black">Abdul Basit</a></td>
              <td><a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: black;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:green;"></i></th>
              <td><a href="" style="font-size: 16px; color:black">Al-Kahf( The Cave )</a></td>
              <td><a href="" style="font-size: 16px; color:black">Maher Al-Mueaqly</a></td>
              <td><a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: black;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row"><i class="fas fa-play" style="color:green;"></i></th>
              <td><a href="" style="font-size: 16px; color:black">Al-Humazah ( The Traduser )</a></td>
              <td><a href="" style="font-size: 16px; color:black">Abdul Muhsin Al Qasim</a></td>
              <td><a href="" style="font-size: 16px; color:black">Hafs A'n Assem</a></td>
              <td>
                <a href="" style="color: black;"><i class="fas fa-align-justify"></i></a>   
                <a href="" style="color: black;"><i class="far fa-star"></i></a>
              </td>
            </tr>
            </tbody>
        </table>
      </div>  
</section>
@endsection
