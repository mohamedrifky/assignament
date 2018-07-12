@extends('layouts.master')
@section('style')
<link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}"/>
<!--plugin styles-->
<link type="text/css" rel="stylesheet" href="vendors/select2/css/select2.min.css" />
<link type="text/css" rel="stylesheet" href="vendors/datatables/css/scroller.bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="vendors/datatables/css/colReorder.bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="vendors/datatables/css/dataTables.bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="css/pages/dataTables.bootstrap.css" />
<!-- end of plugin styles --> 
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="css/pages/tables.css" />
<link type="text/css" rel="stylesheet" href="#" id="skin_change" />
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
          <h3 align="center"> Show students who are older than 16 and who have parents older than 50. </h3>
        </div>
        <div class="card m-t-35">
          <div class="card-block p-t-10">
            <div class=" m-t-25">
              <table class="table table-striped table-bordered table-hover " id="sample_6">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th class="hidden-xs">City</th>
                   <th class="hidden-xs">Parent</th>
                  
                  </tr>
                </thead>
                <tbody>
                
                @foreach($students as $student)
                <tr>
                  <td>{{$student->name}}</td>
                  <td>{{$student->course->name}}</td>
                  <td>{{$student->city}}</td>
                  <td>{{$student->find_parent->first()->name}} - {{$student->find_parent->first()->type}} </td>
                  
                </tr>
                @endforeach
                  </tbody>
                
              </table>
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

<script type="text/javascript" src="vendors/select2/js/select2.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="js/pluginjs/dataTables.tableTools.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/dataTables.colReorder.min.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.min.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/dataTables.responsive.min.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/dataTables.rowReorder.min.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/buttons.colVis.min.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/buttons.html5.min.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/buttons.bootstrap.min.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/buttons.print.min.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/dataTables.scroller.min.js"></script> 
<!-- end of plugin scripts --> 
<!--Page level scripts--> 
<script type="text/javascript" src="js/pages/datatable.js"></script> 

<!--plugin scripts--> 

<!-- end of plugin scripts --> 
<!--Page level scripts--> 

<!-- end of global scripts--> 
<!--Page level scripts--> 

<script type="text/javascript">

</script> 
@endsection