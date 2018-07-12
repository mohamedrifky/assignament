<?php

use Illuminate\Database\Seeder;

class parents_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('parents')->insert(
				['name'=>'Upul Disnayake','type'=>'m','dob'=>'1964-10-12']
			
				
		);
		DB::table('parents')->insert(
				
				['name'=>'Hemal Disnayake','type'=>'m','dob'=>'1961-10-12']
			
				
		);
		DB::table('parents')->insert(
				
				['name'=>'Nirmala Disnayake','type'=>'f','dob'=>'1962-10-12']
				
		);
    }
}
