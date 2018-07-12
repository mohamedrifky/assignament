@extends('layouts.master')
@section('style')
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/switchery/css/switchery.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/radio_css/css/radiobox.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/checkbox_css/css/checkbox.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('css/pages/radio_checkbox.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/datepicker/css/bootstrap-datepicker.min.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/chosen/css/chosen.css') }}"/>
<!--page level styles--> 
<!--<link type="text/css" rel="stylesheet" href="css/pages/colorpicker_hack.css" />-->


<!-- end of plugin styles --> 
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">

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
          <h3 align="center">Add Course </h3>
          
        </div>
        <div class="card m-t-35" style="min-height:400px">
          <div class="card-block p-t-10">
           @if(session()->has('mymessage'))
                  <div class="alert alert-success" id="fade_out"> {{ session()->get('mymessage') }} </div>
                  @endif
            <div class="">
              <div class="col-lg-12">
              <form method="post" action="{{route('create_course_p')}}" id="form" name="post">
                {{ csrf_field() }}
                <div class="row">
                
                  <div class="col-lg-4 ">
                    <label><h5>Course Name</h5></label>
                   <input type="text" class="form-control" id="c_name" name="c_name" required>
                     
                  </div>
                  
                  <div class="col-lg-4  " >
                  <label><h5>Year</h5></label>
                   <!-- <input type="text" class="form-control" id="dp1" name="dp1" data-date-format="yyyy-mm-dd" data-date-viewmode="years" required>-->
                   <select class="form-control chzn-select" tabindex="2" id="year" name="year">
                    
                      <?php
                   $starting_year  =date('2000');
                   $current_year = date('Y');
                   $end_year = date('Y');
                   for($current_year; $starting_year <= $current_year; $current_year--) {
                       echo '<option value="'.$current_year.'"';
                       if( $current_year ==  $end_year ) {
                              echo ' selected="selected"';
                       }
                       echo ' >'.$current_year.'</option>';
                   }   
                   ?>
                    </select>
                    </div>
                     <div class="col-lg-4  m-t-25" id="search">
                     <button type="submit" class="btn btn-info">Add Course</button>
                    </div>
                    
                </div>
                </form>
                
              </div>
              <div class="col-lg-12 m-t-20">
               <table class="table table-striped table-bordered table-hover m-t-20" id="sample_6">
                <thead>
                  <tr>
                    <th>Course Name</th>
                    <th>Year</th>
                    <th class="hidden-xs">Edit</th>
                   <th class="hidden-xs">Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                
                @foreach($courses as $course)
                <tr>
                  <td>{{$course->name}}</td>
                  <td>{{$course->year}}</td>
                  <td><a href="{{route('edit_course',['id'=>$course->id])}}" class="btn btn-info"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="{{route('delete_course',['id'=>$course->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                 
                </tr>
                @endforeach
                  </tbody>
                
              </table>
              </div>
            </div>
          </div>
        </div>
        <!-- END EXAMPLE4 TABLE PORTLET--> 
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

<!-- end of plugin scripts --> 
<!--Page level scripts--> 


 
<script type="text/javascript" src="{{ asset('vendors/chosen/js/chosen.jquery.js') }}"></script> 
<script type="text/javascript" src="{{ asset('vendors/datepicker/js/bootstrap-datepicker.min.js') }}"></script><script type="text/javascript" src="{{ asset('vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script> 

<script type="text/javascript" src="{{ asset('vendors/datetimepicker/js/DateTimePicker.min.js') }}"></script> <script type="text/javascript" src="{{ asset('vendors/datepicker/js/bootstrap-datepicker.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('js/jspdf/html2canvas.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/jspdf/jspdf.min.js') }}"></script> 

<script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script> 

<script type="text/javascript" src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/datatable/dataTables.buttons.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/datatable/buttons.flash.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/datatable/jszip.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/datatable/pdfmake.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/datatable/vfs_fonts.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/datatable/buttons.html5.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/datatable/buttons.print.min.js') }}"></script> 
 
 
 <script type="text/javascript" src="{{ asset('js/header_a4_landscape.js') }}"></script> 
  
<script type="text/javascript" src="{{ asset('js/highchart/highcharts.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/highchart/exporting.js') }}"></script> 
<!--plugin scripts--> 

<!-- end of plugin scripts --> 
<!--Page level scripts--> 

<!-- end of global scripts--> 
<!--Page level scripts--> 

<script type="text/javascript">
$(document).ready(function () {
	$("#fade_out").delay(3000).fadeOut(350);
    // Chosen
    $(".hide_search").chosen({disable_search_threshold: 10});
    $(".chzn-select").chosen({allow_single_deselect: true});
    $(".chzn-select-deselect,#select2_sample").chosen();
    // End of chosen
$('#dp1').datepicker({
		
        todayHighlight: true,
        autoclose: true,
	
		
		
    });
  $('#sample_6').DataTable( {
        dom: 'frtip',
		 "pageLength": 20,
		 "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		"bPaginate": true,
		ordering:false,
		"buttons":false
		
       
    }); 
});

</script> 


@endsection