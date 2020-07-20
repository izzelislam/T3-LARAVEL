<!DOCTYPE html>
<html>
<head>
  @include('admin.part.head')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('admin.part.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.part.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

 @include('admin.part.footer')