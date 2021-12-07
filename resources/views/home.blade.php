<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')

  <title>KINTAMANI</title>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('template.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    
    <div class="content">
      <router-view></router-view>
    </div>
    <!-- /.content -->
  </div>
 
  @include('template.footer')
</div>
<!-- ./wrapper -->


@include('template.script') 
</body>
</html>
