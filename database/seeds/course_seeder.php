<?php

use Illuminate\Database\Seeder;

class course_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('courses')->insert([
				['name'=>'Bsc in I.T','year'=>'2015'],
				['name'=>'Bsc in Agriculture','year'=>'2012'],
				['name'=>'Information technology','year'=>'2010'],
				['name'=>'English','year'=>'2010'],
				['name'=>'English Grammer','year'=>'2010'],
				['name'=>'Laravel','year'=>'2010'],
				['name'=>'Grammer','year'=>'2018'],
				
				]);
    }
}
