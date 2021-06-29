@extends('layouts.app')

@section('title','Alquran')

@section('content')
<section class="section">
    <div class="row">
      <div class="section-body">
        <h3 style="color: black">Alquran</h3>
        <h5>Play all</h5>

        <div>
          <h5 style="color: #2F2F2F">All Surah</h5>
          <div class="row">
            {{-- 1 samapai 4 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="{{ route('surat.alfatiha') }}" style="color: #2F2F2F">1. Al-Fatihah</a>
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
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="{{ route('surat.albaqarah') }}" style="color: #2F2F2F">2. Al-Baqarah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Cows
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">البقرة</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">3. Ali ‘Imran</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Family of Imran
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">علي عمران</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">4. An-Nisa</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Women
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">نساء</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 5 sampai 8 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">5. Al-Ma'idah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Banquet
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">المائدة</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">6. Al-An’am</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Livestock
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الأنعام</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">7. Al-A’raf</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Highest Place
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الأعراف</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">8. Al-Anfal</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        War loot
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الأنفال</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 9 sampai 12 --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">9. At-Taubah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Forgiveness
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">التوبة</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">10. Yunus</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Yunus
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">يونس</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">11. Hud</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Hud
                      </p>
                  </div>
                  <div class="mr-3"]>
                    <p style="font-size: 25px; color:#169E53;">هود</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">12. Yusuf</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Yusuf
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">يوسف</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            {{-- 13 samapai 16 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">13. Ar-Ra’d</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Thunder
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الرعد</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">14. Ibrahim</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Abraham
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">ابراهيم</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">15. Al-Hijr</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Mount Al Hijr
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الحجر</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">16. An-Nahl</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Bee
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">النحل</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 17 sampai 20 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">17. Al-Isra</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Night Journey
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الإسراء</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">18. Al-Kahf</a>
                      </h6>
                      <p class="card-text text-lowercase" style="color: #ADADAD;">
                        Companions of the Cave
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الكهف</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">19. Maryam</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Maryam
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">مريم</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">20. Taha</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Ta-ha
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">طه</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 21 sampai 24 --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">21. Al-Anbiya</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Prophets
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الأنبياء</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">22. Al-Hajj</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Hajj
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;"> الحاج</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">23. Al-Mu’minun</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Believers
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">المؤمنون</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">24. An-Nur</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Light
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">أنور</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            {{-- 25 samapai 28 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">25. Al-furqan</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Differentiator
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الفرقان</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">26. Asy-Syu'ara' </a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Poet
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">سيوارا</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">27. An-Naml</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Ant
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">النمل</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">28. Al-Qasas</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Stories
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">القصاص</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 29 sampai 32 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">29. Al-’Ankabut</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Spider
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">العنكبوت</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">30. Ar-Rum</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Romans
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الروم</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">31. Luqman</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Luqman family
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">لقمان</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">32. As-Sajdah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Sajdah
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">السجدة</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 33 sampai 36 --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">33. Al-Ahzab</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Allied Groups
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الأحزاب</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">34. Saba'</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Sabaeans
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;"> سابا</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">35. Fatir</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Creator
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">تير</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">36. Ya-Sin</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Yaasiin
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">ياسين</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            {{-- 37 samapai 40 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">37. As-Saffat</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Lines
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الصافات</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">38. Sad</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Letter “Saad”
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">شاد</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">39. Az-Zumar</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Troops
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الزمر</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">40. Ghafir</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Forgiving
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">غافر</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 41 sampai 44 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">41. Fussilat</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Expla ined in Detail
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">فصيلات</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">42. Asy-Syura</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Discussion
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الشورى</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">43. Az-Zukhruf</a>
                      </h6>
                      <p class="card-text text-lowercase" style="color: #ADADAD;">
                        The Ornaments of Gold
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الزخرف</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">44. Ad-Dukhan</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Fog
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الدخان</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 45 sampai 48 --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">45. Al-Jasiyah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Knees Bend
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;"> الجاسيا</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">46. Al-Ahqaf</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Sand Dunes
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الأحقاف</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">47. Muhammad</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Muhammad
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">محمد</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">48. Al-Fath</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Victory
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الفتح</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            {{-- 49 samapai 52 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">49. Al-Hujurat</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Rooms
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الحجرات</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">50. Qaf</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Letter “Qaaf”
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">قاف</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">51. Az-Zariyat</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Flying Wind
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الزاريات</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">52. At-Tur</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Hill
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الطور</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 53 sampai 56 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">53. An-Najm</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Star
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">النجم</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">54. Al-Qamar</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Month
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">القمر</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">55. Ar-Rahman</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Most Gracious
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">رحمن </p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">56. Al-Waqi’ah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Judgment Day
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الواقعية</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 57 sampai 60 --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">57. Al-Hadid</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Iron
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;"> الحديد</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">                    
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                          <a href="" style="color: #2F2F2F">58. Al-Mujadilah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Pleading Woman
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">المجادلة</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">59. Al-Hasyr</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Expulsion
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الحصر</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">60. Al-Mumtahanah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Tested Woman
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الممحانة</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            {{-- 61 samapai 64 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">61. As-Saff</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The One Line
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">عساف</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">62. Al-Jumu’ah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD; font-size:13px">
                        The Conggregation, Friday
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الجمعة</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">63. Al-Munafiqun</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Hypocrites
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">المنافقون</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">64. At-Tagabun</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Day Shows Errors
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">التجبون</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 65 sampai 68 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">65. At-Talaq</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Divorce
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الطلاق</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">66. At-Tahriim</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Prohibition
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">التحريم</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">67. Al-Mulk</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Soveregnty
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الملك</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">68. Al-Qalam</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Pen
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">القلم</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 69 sampai 72 --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">69. Al-Haqqah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Judgment Day
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الحاقة</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">                    
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">70. Al-Ma'arij</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD; font-size:13px;">
                        The Ascending Stairways
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;"> المعارج</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">71. Nuh</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Noah
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">نوح</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">72. Al-Jinn</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Jinn
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الجن</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            {{-- 73 samapai 76 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">73. Al-Muzzammil</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Blanket Person
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">المزمل</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">74. Al-Muddassir</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Cloaked One
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">المدثر</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">75. Al-Qiyamah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Doomsday
                      </p>
                  </div>
                  <div class="mr-4">
                    <p style="font-size: 25px; color:#169E53;">القيامة</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">76. Al-Insan</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Human
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الإنسان</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 77 sampai 80 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">77. Al-Mursalat</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Emissaries
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">المرسلات</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">78. An-Naba'</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Big news
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">النبأ</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">79. An-Nazi’at</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Those who drag forth
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">النازعات</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">80. ‘Abasa</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        He is surly
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">أباسا</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 81 sampai 84 --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">81. At-Takwir</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Roll
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;"> التكوير</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">                    
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">82. Al-Infitar</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Cleaving
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الانفتار</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">83. Al-Mutaffifin</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Defrauding
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">المطففين</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">84.Al-Insiqaq</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Sundering
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الانسحاق</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            {{-- 85 samapai 89 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">85. Al-Buruj</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD; font-size: 13px;">
                        The Mansions of the Stars
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">البروج</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">86. At-Tariq</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Nightcommer
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الطارق</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">87. Al-A’la</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Most Hight
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الأعلى</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">88. Al-Gasyiyah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Overwhelming
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الغاشية</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 89 sampai 92 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">89. Al-Fajr</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Dawn
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الفجر	</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">90. Al-Balad</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Country
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">البلد</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">91. Asy-Syams</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        Those Sun
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الشمس</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">92. Al-Lail</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Night
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">اليل</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 93 sampai 96 --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">93. Ad-Duha</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Morning Hours
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;"> الضحى‎‎</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">                    
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">94. Al-Insyirah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Relief
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الإنشراح‎‎</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">95. At-Tin</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Fig
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">التينِ</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">96. Al-’Alaq</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Clot of Blood
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">العلق</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            {{-- 97 samapai 100 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">97. Al-Qadr</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Glory
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">القدر</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">98. Al-Bayyinah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Clear Proof
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">البينة</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">99. Az-Zalzalah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Eart hquake
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الزلزلة‎‎</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">100. Al-’Adiyat</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Courser
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">العاديات‎‎</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 101 sampai 104 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">101. Al-Qari’ah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Calamity
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">القارعة‎‎</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">102. At-Takasur</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD; font-size: 13px;">
                        The Rivalry in world incre..
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">التكاثر‎‎</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">103. Al-’Asr</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Declining Day
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">العصر</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">104. Al-Humazah</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Traducer
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الهمزة‎‎</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 105 sampai 108 --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">105. Al-Fil</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Elephant
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;"> الفيل</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">                    
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">106. Al-Quraisy</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The tribe of Quraish
                      </p>
                  </div>
                  <div class="col-4">
                    <p style="font-size: 25px; color:#169E53;">القريش</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">107. Al-Ma’un</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Small Kindnesses
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الماعون</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">108. Al-Kausar</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Abundant favors
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الكوثر</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            {{-- 109 samapai 112 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">109. Al-Kafirun</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Unbelievers
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الكافرون</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">110. An-Nasr</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Divine Support
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">النصر‎‎</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">111. Al-Lahab</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Flaming Fire
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">اللهب‎‎</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">112. Al-Ikhlas</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Fajr Time
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الإخلاص‎‎</p>
                  </div>
                </div>
              </div>
            </div>
            {{-- 113 sampai 114 kolom --}}
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">113. Al-Falaq</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Mankind
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الفلق</p>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card w3-white w3-hover-shadow">
                <div class="row">
                  <div class="col">
                      <h6 class="card-title">
                         <a href="" style="color: #2F2F2F">114. An-Nas</a>
                      </h6>
                      <p class="card-text" style="color: #ADADAD;">
                        The Mankind
                      </p>
                  </div>
                  <div class="mr-3">
                    <p style="font-size: 25px; color:#169E53;">الناس</p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>  
    </div>
</section>
@endsection
