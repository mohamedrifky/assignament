<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\students;
use App\student_parent;
use App\course;
use App\parents;
use Auth;

class course_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function __construct()
    {
	
      $this->middleware(['web','auth']);
    }
	 
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
		//
		
		
		
		
		
		$courses=course::all();
		return view('course.create',compact('courses'));
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$course_name=$request->c_name;
		$year=$request->year;
		
	 	$table=new course();
		$table->name=$course_name;
		$table->year=$year;
		$table->save();
		
	
     return redirect()->back()->with('mymessage','Course Saved Successfully.');
	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$course=course::find($id);
		return view('course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$course_name=$request->c_name;
		$year=$request->year;
		
	 	$table=course::find($id);
		$table->name=$course_name;
		$table->year=$year;
		$table->save();
		
		return redirect()->route('create_course')->with('mymessage','Course Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		$students=students::where('course_id','=',$id)->select('id')->get();
		$students_array=array();
		foreach($students as $student)
		{
		$students_array[]=$student->id;
		}
		student_parent::whereIn('student_id',$students_array)->delete();
		students::where('course_id','=',$id)->delete();
		$course=course::where('id',$id)->delete();
		
		return redirect()->route('create_course')->with('mymessage','Course Deleted Successfully.');
    }
}
