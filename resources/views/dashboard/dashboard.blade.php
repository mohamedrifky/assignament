@extends('layouts.master')
@section('style')
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}"/>
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/switchery/css/switchery.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/radio_css/css/radiobox.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/checkbox_css/css/checkbox.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('css/pages/radio_checkbox.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/datepicker/css/bootstrap-datepicker.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/chosen/css/chosen.css') }}"/>

<!--plugin styles-->
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/select2/css/select2.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/datatables/css/scroller.bootstrap.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/datatables/css/colReorder.bootstrap.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/datatables/css/dataTables.bootstrap.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('css/pages/dataTables.bootstrap.css') }}" />
<!-- end of plugin styles --> 
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="{{ asset('css/pages/tables.css') }}" />


<!--End of page level styles-->

<style>
    .chosen-container-single .chosen-single{
    	height: 34px;
    	border-radius: 0.25rem;
    	line-height: 34px;
    	border-bottom-left-radius: 0;
    	border-top-left-radius: 0;
    	font-size:14px;
    }
    </style>
@endsection
@section('content') 
<!-- start enterprise registration form -->


<div id="content" class="bg-container">
  <header class="head">
    <div class="main-bar row">
      <div class="col-lg-6 col-md-4 col-sm-4">
        <h4 class="nav_top_align"> <i class="fa fa-dashboard"></i> Dashboard </h4>
      </div>
      <div class="col-lg-6 col-md-8 col-sm-8">
        <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
          <li class="breadcrumb-item"> <a href=""> <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard </a> </li>
          <!--<li class="breadcrumb-item">
                       <a href="#">Registration</a>
                   </li>-->
          
        </ol>
      </div>
    </div>
  </header>
  <div class="outer form_wizzards">
    <div class="inner bg-container "> 
      
      <!-- Basic info Start -->
   
          <div class="card">
          
         
            <div class="card-header bg-white m-t-15">
           <h3 align="center"> Assignment</h3>
            
            </div>
            </div>
            
          
        
        <!-- /.inner --> 
      </div>
      <!-- Basic info end --> 
      
      <br>
      <br>
      <br>
      <!-- /.inner --> 
    </div>
  </div>
</div>
@endsection
@section('script') 
<!-- plugin scripts --> 

<!--End of plugin scripts--> 
<!--Page level scripts--> 

<script type="text/javascript" src="{{ asset('js/highchart/highcharts.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/highchart/exporting.js') }}"></script> 
<script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script> 




<!--plugin scripts--> 

<!-- end of plugin scripts --> 
<!--Page level scripts--> 

<!-- end of global scripts--> 
<!--Page level scripts--> 
<script type="text/javascript" src="{{ asset('js/jquery.idle.min.js') }}"></script> 

<script type="text/javascript">

</script>
@endsection