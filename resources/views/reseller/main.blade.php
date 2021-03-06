<!DOCTYPE html>
<html>
  <head>
    @include('reseller.partials._head')
    @yield('styles')
  </head>
  <body>
    <!-- Side Navbar -->
    @include('reseller.partials._left_menu')
    <div class="page home-page">
      @include('reseller.partials._top_nav')
      <!-- Counts Section -->
      @yield('content')

      @include('reseller.partials._footer')
    </div>
    @include('reseller.partials._scripts')
    @yield('scripts')
  </body>
</html>
