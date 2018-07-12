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
          <h3 align="center">Add Student </h3>
          
        </div>
        <div class="card m-t-35" style="min-height:400px">
          <div class="card-block p-t-10">
           @if(session()->has('mymessage'))
                  <div class="alert alert-success" id="fade_out"> {{ session()->get('mymessage') }} </div>
                  @endif
            <div class="">
              <div class="col-lg-12">
              <form method="post" action="{{route('create_student_p')}}" id="form" name="post">
                {{ csrf_field() }}
                <div class="row">
                
                  <div class="col-lg-3 ">
                    <label><h5>Student Name</h5></label>
                   <input type="text" class="form-control" id="s_name" name="s_name" required>
                     
                  </div>
                  
                  <div class="col-lg-3  " >
                  <label><h5>Course</h5></label>
                     <select class="form-control chzn-select" tabindex="2" id="course_id" name="course_id">
                    @foreach($courses as $course)
                    <option value="{{$course->id}}">{{$course->name}} - {{$course->year}}</option>
                    @endforeach
                     </select>
                   
                    </div>
                    
                    
                  <div class="col-lg-3  " >
                  <label><h5>Date Of Birth</h5></label>
                    <input type="text" class="form-control" id="dp1" name="dp1" data-date-format="yyyy-mm-dd" data-date-viewmode="years" required>
                   
                    </div>
                    
                    <div class="col-lg-3  " >
                  <label><h5>City</h5></label>
                    <input type="text" class="form-control" id="city" name="city" required>
                   
                    </div>
                    </div>
                    <div class="row m-t-10">
                       <div class="col-lg-3  " >
                  <label><h5>Class</h5></label>
                     <select class="form-control chzn-select" tabindex="2" id="class" name="class">
                     
                    <?php
					 foreach(range(1,13,1) as $int)
					 {
					 ?>
                     <option value="<?php echo $int;?>"><?php echo $int;?></option>
                   <?php
					 }
					 ?>
                   </select>
                    </div>
                      <div class="col-lg-3  " >
                  <label><h5>Parents</h5></label>
                   <select class="form-control chzn-select" tabindex="2" id="parent" name="parent">
                     
                     @foreach($parents as $parent)
                     <option value="{{$parent->id}}">{{$parent->name}}</option>
                     @endforeach
                    
                   </select>
                    </div>
                    
                     <div class="col-lg-3  m-t-25" id="search">
                     <button type="submit" class="btn btn-info">Add Student</button>
                    </div>
                    
                    
                </div>
                </form>
                
              </div>
              <div class="col-lg-12 m-t-20">
               <table class="table table-striped table-bordered table-hover " id="sample_6">
                <thead>
                  <tr>
                  <th>Student ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th class="hidden-xs">City</th>
                   <th class="hidden-xs">Parent</th>
                    <th class="hidden-xs">Dob</th>
                    <th class="hidden-xs">Edit</th>
                     <th class="hidden-xs">Delete</th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach($students as $student)
                <tr>
                <td>{{$student->student_id}}</td>
                  <td>{{$student->name}}</td>
                  <td>{{$student->course->name}}</td>
                  <td>{{$student->city}}</td>
                  <td>{{$student->find_parent->first()->name}}</td>
                  <td>{{$student->dob}}</td>
                  <td><a href="{{route('edit_student',['id'=>$student->id])}}" class="btn btn-info"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="{{route('delete_student',['id'=>$student->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
<script type="text/javascript" src="{{ asset('js/jquery.maskedinput.js') }}"></script> 
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
	$("#dp1").mask("9999-99-99");
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