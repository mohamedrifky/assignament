<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		 $this->call(students_seeder::class);
		  $this->call(parents_seeder::class);
		   $this->call(students_parents_seeder::class);
		    $this->call(course_seeder::class);
			  $this->call(users_seeder::class);
			  $this->call(roles_seeder::class);
			
    }
}
