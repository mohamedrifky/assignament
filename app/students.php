<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    //
	 public function course()
    {
        return $this->hasOne('App\course','id','course_id');
    }
	
	 public function find_parent()
    {
	/* return $this->hasManyThrough(
            'App\parents',
            'App\students',
            'id', // Foreign key on student table...
            'id', // Foreign key on partnts table...
            'id', // Local key on parents table...
            'id' // Local key on student table...
        );*/
		 return $this->belongsToMany('App\parents', 'student_parents', 
      'student_id', 'parent_id');
	}
}
