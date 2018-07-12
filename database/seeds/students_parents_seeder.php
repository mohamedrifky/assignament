<?php

use Illuminate\Database\Seeder;

class students_parents_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('student_parents')->insert(
		['student_id' => 1,'parent_id' => 1,]
		
		);
		DB::table('student_parents')->insert(
		
		['student_id' => 2,'parent_id' => 2,]
		
		);
		
		DB::table('student_parents')->insert(
		
		['student_id' => 3,'parent_id' => 2,]
		);
    }
}
