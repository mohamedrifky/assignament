<?php

use Illuminate\Database\Seeder;

class students_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('students')->insert(
		['student_id' => 'STD000001','name' => 'Rifky','course_id' => 4,'dob' => '1990-10-12','city' => 'Colombo','class'=>8]
		
		);
		DB::table('students')->insert(
		
		['student_id' => 'STD000002','name' => 'Lahiru Fernando','course_id' => 2,'dob' => '1990-08-05','city' => 'Nupe','class'=>6]
		
		);
		
		DB::table('students')->insert(
		
		['student_id' => 'STD000003','name' => 'Thameesha Dilshan','course_id' => 2,'dob' => '1995-04-05','city' => 'Rathmalee','class'=>6]
		);
    }
}
