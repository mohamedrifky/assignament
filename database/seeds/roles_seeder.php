<?php

use Illuminate\Database\Seeder;

class roles_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('roles')->insert([
				['name'=>'admin'],
				['name'=>'user'],
				
				
				]);
    }
}
