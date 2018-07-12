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

<link type="text/css" rel="stylesheet" href="{{ asset('css/pages/form_elements.css') }}"/>
<link type="text/css" rel="stylesheet" href="{{ asset('css/pages/buttons.css') }}"/>

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
          <h3 align="center">Show the class and the parents for given student id </h3>
        </div>
        <div class="card m-t-35" style="min-height:400px">
          <div class="card-block p-t-10">
            <div class="">
              <div class="col-lg-12">
              <form method="post" action="{{route('search_id_p')}}" id="form" name="post">
                {{ csrf_field() }}
                <div class="row">
                
                  <div class="col-lg-4 ">
                    <label><h5>Student ID</h5></label>
                    <select class="form-control chzn-select" tabindex="2" id="student_id" name="student_id">
                     <option value="null">Select Student ID</option>
                     @foreach($student_id_list as $student_id)
                      <option <?php if($student_id_p==$student_id->id){echo "selected";}?> value="{{$student_id->id}}">{{$student_id->student_id}}</option>
                      @endforeach
                    </select>
                     
                  </div>
                  
                  <div class="col-lg-4  m-t-25" id="search">
                     <button type="submit" class="btn btn-info">Search</button>
                    </div>
                    
                </div>
                </form>
                @if(!empty($student_info))
                <div class="col-lg-12 m-t-25">
                <ul>
                <li>Student ID : {{$student_info->student_id}} </li>
                <li>Student Name: {{$student_info->name}}</li>
                <li>Dob: {{$student_info->dob}}</li>
                <li>City: {{$student_info->city}}</li>
                <li>Class : {{$student_info->class}} </li>
                <li>Course : {{$student_info->course->name}}</li>
                <li>Year : {{$student_info->course->year}}</li>
                <li>Parent : {{$student_info->find_parent->first()->name}}</li>
              
                
                </ul>
                </div>
                @endif
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

<script type="text/javascript" src="{{ asset('js/sprintf.js') }}"></script> 
<script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('vendors/chosen/js/chosen.jquery.js') }}"></script> 
<script type="text/javascript" src="{{ asset('vendors/datepicker/js/bootstrap-datepicker.min.js') }}"></script><script type="text/javascript" src="{{ asset('vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('vendors/inputmask/js/inputmask.date.extensions.js') }}"></script> 
<script type="text/javascript" src="{{ asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('js/pages/sweet_alerts.js') }}"></script> 

<!--plugin scripts--> 

<!-- end of plugin scripts --> 
<!--Page level scripts--> 

<!-- end of global scripts--> 
<!--Page level scripts--> 

<script type="text/javascript">
$(document).ready(function () {
    // Chosen
    $(".hide_search").chosen({disable_search_threshold: 10});
    $(".chzn-select").chosen({allow_single_deselect: true});
    $(".chzn-select-deselect,#select2_sample").chosen();
    // End of chosen
search_id();
   
});
$("#student_id").change(function(e) {
    
	search_id();
});
function search_id()
{
var val=$("#student_id").val();
if(val==='null')
	{
	$("#search").hide()	;
		
	}
	else
	{
	$("#search").show()	;
	}	
}

</script> 
@endsection