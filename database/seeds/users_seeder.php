<?php

use Illuminate\Database\Seeder;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('users')->insert([
				['name'=>'admin','username'=>'admin','password'=>bcrypt('123456'),'role_id'=>'1','active'=>1,'remember_token'=>str_random(10)],
				['name'=>'user','username'=>'user','password'=>bcrypt('123456'),'role_id'=>'2','active'=>1,'remember_token'=>str_random(10)]
				
				
				]);
    }
}
