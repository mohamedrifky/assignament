<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\students;
use App\student_parent;
use App\course;
use App\parents;


class email_controller extends Controller
{
    //
	public function send_email(Request $request)
	{
	
		 
     $students=students::all();
	 
	 $e_meeage='<table border=1>
                <thead>
                  <tr>
                  <th>Student ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th class="hidden-xs">City</th>
                   <th class="hidden-xs">Parent</th>
                    <th class="hidden-xs">Dob</th>
                   
                  </tr>
                </thead>
                <tbody>';
                
                foreach($students as $student)
				{
                $e_meeage.='<tr>';
				
                  $e_meeage.='<td>'.$student->student_id.'</td>';
                  $e_meeage.='<td>'.$student->name.'</td>';
                  $e_meeage.='<td>'.$student->course->name.'</td>';
                  $e_meeage.='<td>'.$student->city.'</td>';
                  $e_meeage.='<td>'.$student->find_parent->first()->name.'</td>';
                  $e_meeage.='<td>'.$student->dob.'</td>';
                  $e_meeage.='</tr>';
				}
				
                  $e_meeage.='</tbody></table>'; 
				
	 
	 
	
	 $subject="Assignment Student Details";
	 
	 $email_to=$request->email;
	 $maildata=array(
            'email'=> $email_to,
			'date_time'=>date('Y-m-d H:i:s'),
			'subject'=>$subject,
			'body'=>$e_meeage,
			
           
        );	
		
	Mail::send([],[], function ($message) use($maildata) {
		$message->from('name@example.com', 'Assignment Student Details');
 		$message->to($maildata['email']);
    	$message->subject($maildata['subject']);
		$message->setBody($maildata['body'], 'text/html' );
		
		});	
		
		return redirect()->back()->with('mymessage','Email Has Sent Successfully.');
	}
	public function create()
	{
		
	return view('emails.email_view');	
	}
}
