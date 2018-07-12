<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::table('students', function($table) {
        $table->integer('class')->unsigned()->after('city');  
		$table->string('student_id')->after('id'); 
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		 Schema::table('students', function($table) {
        $table->dropColumn('class'); 
		$table->dropColumn('student_id'); 
        });
    }
}
