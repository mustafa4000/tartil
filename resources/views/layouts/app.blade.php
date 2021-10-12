<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('includes.meta')
  <title> @yield('title') | Dashboard</title>
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>    
  
    @stack('before-style')
    {{-- style css --}}
    @include('includes.style')
    @stack('after-style')

    <style type="text/css">
      .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #fff; 
      }
      .preloader .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        font: 14px arial;
      }
    </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <div class="preloader">
        <div class="loading">
          <img src="{{ url('/assets/img/load.gif') }}" width="100">
          <p>Harap Tunggu</p>
        </div>
      </div>
      
      @include('sweetalert::alert')
      {{-- header / navbar --}}
      @include('includes.header')
      <div class="main-sidebar" style="background: #169E53;">
        {{-- sidebar --}}
        @include('includes.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content" style="background: #fff;">
        @yield('content')
        
      </div>

{{-- /      footer --}}
      @include('includes.footer')
    </div>
  </div>

  <div id="playing">
    a
  </div>

  @stack('before-script')
  <script>
    $(document).ready(function(){
    $(".preloader").fadeOut();
    })
  </script>

  {{-- google translate --}}
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
  </script>
  
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
  <script src="{{ asset('/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('/assets/js/page/index.js') }}"></script>
  @stack('after-script')
</body>
</html>