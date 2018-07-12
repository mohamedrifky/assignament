<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\student_parent;
use App\course;
use App\parents;


class student_controller extends Controller
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
		$students=students::all();
		$courses=course::all();
		$parents=parents::all();
		return view('students.create',compact('courses','parents','students'));
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
		$name=$request->s_name;
		$course_id=$request->course_id;
		$dob=$request->dp1;
		$city=$request->city;
		$class=$request->class;
		$parent=$request->parent;
		
		$count=students::count();
        if(!empty($count)){
            $last_student_id=students::all()->last()->student_id;
            $eno= ltrim($last_student_id,'STD') +1 ;
            $eno1=sprintf("%06d",$eno);
            $last_student_id="STD".$eno1;  //student_id 
            $last_student_id;
        }  else {
            $last_student_id='STD000001';  //student_id
            $last_student_id;
        } 
		
		
		$table=new students();
		$table->student_id=$last_student_id;
		$table->name=$name;
		$table->course_id=$course_id;
		$table->dob=$dob;
		$table->city=$city;
		$table->class=$class;
		$table->save();
		
		$table2=new student_parent();
		$table2->student_id=$table->id;
		$table2->parent_id=$parent;
		$table2->save();
		
		
		 return redirect()->back()->with('mymessage','Student Saved Successfully.');
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
		$students=students::find($id);
		$student_parent=student_parent::where('student_id','=',$id)->first();
		$courses=course::all();
		$parents=parents::all();
		return view('students.edit',compact('courses','parents','students','student_parent'));
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
		$name=$request->s_name;
		$course_id=$request->course_id;
		$dob=$request->dp1;
		$city=$request->city;
		$class=$request->class;
		$parent=$request->parent;
		
				
		
		$table=students::find($id);
		$table->name=$name;
		$table->course_id=$course_id;
		$table->dob=$dob;
		$table->city=$city;
		$table->class=$class;
		$table->save();
		
		$sp_id=student_parent::where('student_id','=',$id)->first();
		
		$table2=student_parent::find($sp_id->id);
		$table2->parent_id=$parent;
		$table2->save();
		
		
		 return redirect()->route('create_student')->with('mymessage','Student updated Successfully.');
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
		
	
		student_parent::where('student_id','=',$id)->delete();
		students::where('id','=',$id)->delete();
		
		return redirect()->route('create_student')->with('mymessage','Student Deleted Successfully.');
    }
}
