<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_parent extends Model
{
    //
	 public function parent()
    {
        return $this->hasOne('App\parents','id','parent_id');
    }
	
	 public function student()
    {
        return $this->hasOne('App\students','id','student_id');
    }
	
	
}
