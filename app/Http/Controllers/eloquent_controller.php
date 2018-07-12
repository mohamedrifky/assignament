<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\student_parent;
use Carbon\Carbon;

class eloquent_controller extends Controller
{
    //
	
	 public function __construct()
    {
	
      $this->middleware(['web','auth']);
    }
	
	public function show_all_students()
	{
	$students=students::all();

	return view('students.show_all_student',compact('students'));
		
	}
	public function show_all_students_18()
	{
	
	$age_date= Carbon::today()->subYears(18)->endOfDay()->format('Y-m-d');
	$students=students::where('dob','<',$age_date)->get();
	return view('students.show_all_student_18',compact('students'));
		
	}
	public function show_class()
	{
		
		$students=students::join('courses','courses.id','=','students.course_id')
		->where('class','=','8')
		->where('year','=','2010')
		->select('students.id as id','students.name','students.course_id','students.city','students.dob','courses.year','class')
		->get();
		
		return view('students.show_all_student_class',compact('students'));
		
	}
	public function show_id()
	{
	 $student_id_list=students::all();
	 $student_id_p="";
	 $student_info="";
	 return view('students.show_search',compact('student_id_list','student_id_p'));
		
	}
	public function show_id_p(Request $request)
	{
	 $student_id_list=students::all();
	 $student_id_p=$request->student_id;
	 $student_info=students::where('id','=',$student_id_p)->first();
	 
	
	 return view('students.show_search',compact('student_id_list','student_id_p','student_info'));
		
	}
	
	public function show_parents_students()
	{
	
	$student_date= Carbon::today()->subYears(16)->endOfDay()->format('Y-m-d');
	$parent_date= Carbon::today()->subYears(50)->endOfDay()->format('Y-m-d');
	
	$students=students::join('student_parents','student_parents.student_id','=','students.id')
	->join('parents','parents.id','=','student_parents.parent_id')
	->where('students.dob','<',$student_date)
	->where('parents.dob','<',$parent_date)
	
	->get(['students.*','student_parents.*','parents.*','students.name as name']);
	
	return view('students.show_all_student_parent',compact('students'));	
		
	}
}
