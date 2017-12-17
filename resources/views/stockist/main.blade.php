<!DOCTYPE html>
<html>
  <head>
    @include('stockist.partials._head')
    @yield('styles')
  </head>
  <body>
    <!-- Side Navbar -->
    @include('stockist.partials._left_menu')
    <div class="page home-page">
      @include('stockist.partials._top_nav')
      <!-- Counts Section -->
      @yield('content')

      @include('stockist.partials._footer')
    </div>
    @include('stockist.partials._scripts')
    @yield('scripts')
  </body>
</html>
