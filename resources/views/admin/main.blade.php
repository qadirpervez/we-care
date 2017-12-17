<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.partials._head')
    @yield('styles')
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('admin.partials._left_menu')
        @include('admin.partials._top_nav')
        <!-- page content -->
        <div class="right_col" role="main">
          @include('admin.partials._top_tiles')

          @yield('content')
        </div>
        <!-- /page content -->
        @include('admin.partials._footer')
      </div>
    </div>
    @include('admin.partials._scripts')
    @yield('scripts')
  </body>
</html>
