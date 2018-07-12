<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
   <title>Assignment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/logo/cropped-site-icon-32x32.png') }}"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/components.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}"/>
    <!-- end of global styles-->
    <!--Sweet Alert-->
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/sweetalert/css/sweetalert2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/pages/sweet_alert.css')}}"/> 
    
    
     <!--P Notify-->
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/pnotify/css/pnotify.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/animate/css/animate.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/pnotify/css/pnotify.buttons.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/pnotify/css/pnotify.history.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/pnotify/css/pnotify.mobile.css') }}"/>
	 <link type="text/css" rel="stylesheet" href="{{ asset('css/pages/p_notify.css') }}"/>
   <!--P Notify-->
   
   
    
     @yield('style')
</head>

<body>
<div class="preloader" style=" position: fixed;width: 100%;height: 100%;top: 0;left: 0;z-index: 100000;backface-visibility: hidden;background: #ffffff;">
    <div class="preloader_img" style="width: 200px;height: 200px;position: absolute;left: 48%;top: 48%;background-position: center;z-index: 999999">
        <img src="{{ asset('img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
    <div class="bg-dark" id="wrap">
        <div id="top">
            <!-- .navbar -->
            @include('layouts.header.header')
            <!-- /.navbar -->
            <!-- /.head --> </div>
        <!-- /#top -->
        <div class="wrapper" >
            
            <!-- #left -->
            @include('layouts.sidebars.sidebar')
            <!-- /#left -->
            @yield('content')
            
        </div>
       

            <!-- /#content -->
        </div>
        <!--wrapper-->


    </div>
    <!-- /#wrap -->
    <!-- global scripts-->
    <script type="text/javascript" src="{{ asset('js/components.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<!---P Notify-->    

 <!---P Notify-->     
   

    <!-- end of global scripts-->
 <script>
 $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


 </script>

    @yield('script')
</body>

<!-- Mirrored from dev.lorvent.com/admire/charts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Dec 2016 11:05:46 GMT -->
</html>