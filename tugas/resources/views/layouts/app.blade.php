<!doctype html>
<html lang="en">
  <head>
    @include('layouts.link')
    <title>@yield('title')</title>
  </head>
  <body>
   @include('layouts.navbar')
   <div class="container">
   	<span class="badge badge-dark"> Selamat Datang :{{ auth()->check() ? auth()->user()->name :'-' }}</span>
   </div>
   @yield('content')
   @include('layouts.script')
  </body>
</html>