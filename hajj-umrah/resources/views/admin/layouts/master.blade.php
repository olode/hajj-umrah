<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
@include('admin.dashboard.includes.head')
<body class="horizontal-layout horizontal-top-icon-menu 2-columns   menu-expanded"
data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

@include('admin.dashboard.includes.header')

  <!-- fixed-top-->
  
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- Horizontal navigation-->
@include('admin.dashboard.includes.nav')
  


  <!-- Horizontal navigation-->


  @yield('content')

@include('admin.dashboard.includes.footer')
@include('admin.dashboard.includes.js')
  
  <!-- ////////////////////////////////////////////////////////////////////////////-->

 
</body>
</html>