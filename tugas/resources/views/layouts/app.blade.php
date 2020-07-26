<!doctype html>
<html lang="en">
  <head>
    @include('layouts.link')
    <title>@yield('title')</title>
  </head>
  <body>
   @include('layouts.navbar')
   @yield('content')
   @include('layouts.script')
  </body>
</html>