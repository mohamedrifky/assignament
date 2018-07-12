<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\student_parent;
use App\course;
use App\parents;

class parents_controller extends Controller
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
		$parents=parents::all();
		return view('parents.create',compact('parents'));
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
		$parent_name=$request->p_name;
		$gender=$request->gender;
		$dob=$request->dp1;
		
		$table=new parents();
		$table->name=$parent_name;
		$table->type=$gender;
		$table->dob=$dob;
		$table->save();
		
		
		return redirect()->back()->with('mymessage','Parent Saved Successfully.');
		
		
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
		$parents=parents::find($id);
		return view('parents.edit',compact('parents'));
		
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
		$parent_name=$request->p_name;
		$gender=$request->gender;
		$dob=$request->dp1;
		
		$table= parents::find($id);
		$table->name=$parent_name;
		$table->type=$gender;
		$table->dob=$dob;
		$table->save();
		
		
		return redirect()->route('create_parents')->with('mymessage','Parent Updated Successfully.');
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
		$students=student_parent::where('parent_id','=',$id)->get();
		$students_array=array();
		foreach($students as $student)
		{
		$students_array[]=$student->id;
		}
		student_parent::whereIn('student_id',$students_array)->delete();
		students::whereIn('id',$students_array)->delete();
		parents::where('id','=',$id)->delete();
		return redirect()->route('create_parents')->with('mymessage','Parent Deleted Successfully.');
    }
}
