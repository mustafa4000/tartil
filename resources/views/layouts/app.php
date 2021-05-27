<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')
  <title> @yield('title') | Dashboard</title>

    @stack('before-style')
    {{-- style css --}}
    @include('includes.style')
    @stack('after-style')

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      {{-- header / navbar --}}
      @include('includes.header')
      {{-- sidebar --}}
      @include('includes.sidebar')

      <!-- Main Content -->
      <div class="main-content" style="background: white">
        @yield('content')
      </div>

      {{-- footer --}}
      @include('includes.footer')
    </div>
  </div>

  @stack('before-script')
    {{-- javascript --}}
    @yield('includes.script')
  @stack('after-script')
</body>
</html>
