<div id="left">
    <!-- #menu -->
    <ul id="menu" class="bg-blue dker">
<?php
$users = Auth::user();
$log_role_id=$users->id;


?>
        
  

 

       
       
        <li class="{{(\Request::route()->getName() == 'show_all_students') ? 'active' : '' || (\Request::route()->getName() == 'dashboard') ? 'active' : ''}}">
            <a href="{{route('show_all_students')}}">
                <i class="fa fa-user fa-2x"></i>
                <span class="link-title">&nbsp; All Students </span>
            </a>
        </li>
         <li class="{{(\Request::route()->getName() == 'show_all_students_18') ? 'active' : ''}}">
            <a href="{{route('show_all_students_18')}}">
                <i class="fa fa-user fa-2x"></i>
                <span class="link-title">&nbsp;Students who are older than 18</span>
            </a>
        </li>
         <li class="{{(\Request::route()->getName() == 'show_class') ? 'active' : ''}}">
            <a href="{{route('show_class')}}">
                <i class="fa fa-user fa-2x"></i>
                <span class="link-title">&nbsp;All Students in class 8 in 2010 </span>
            </a>
        </li>
         <li class="{{(\Request::route()->getName() == 'search_id') ? 'active' : '' || (\Request::route()->getName() == 'search_id_p') ? 'active' : ''}}">
            <a href="{{route('search_id')}}">
                <i class="fa fa-user fa-2x"></i>
                <span class="link-title">&nbsp;Search By Student id</span>
            </a>
        </li>
         <li class="{{(\Request::route()->getName() == 'parents_show') ? 'active' : ''}}">
            <a href="{{route('parents_show')}}">
                <i class="fa fa-user fa-2x"></i>
                <span class="link-title">&nbsp;Students older than 16 and who have parents older than 50. </span>
            </a>
        </li>
           
               
            @if($log_role_id==1)    
        <li class="{{(\Request::route()->getName() == 'create_course') ? 'active' : ''}}" >
            <a href="{{route('create_course')}}">
                <i class="fa fa-file-text-o fa-2x"></i>
                <span class="link-title">&nbsp;Manage Courses</span>
                
            </a>
       </li>
       
        <li class="{{(\Request::route()->getName() == 'create_parents') ? 'active' : ''}}" >
            <a href="{{route('create_parents')}}">
                <i class="fa fa-user fa-2x"></i>
                <span class="link-title">&nbsp;Manage Parents</span>
                
            </a>
       </li>
       
         <li class="{{(\Request::route()->getName() == 'create_student') ? 'active' : ''}}" >
            <a href="{{route('create_student')}}">
                <i class="fa fa-user fa-2x"></i>
                <span class="link-title">&nbsp;Manage Students</span>
                
            </a>
       </li>
         <li class="{{(\Request::route()->getName() == 'email') ? 'active' : ''}}" >
            <a href="{{route('email')}}">
                <i class="fa fa-envelope fa-2x"></i>
                <span class="link-title">&nbsp;Send Email To Given Address</span>
                
            </a>
       </li>
            
          @endif  




    </ul>
    <!-- /#menu -->
</div>  
                     