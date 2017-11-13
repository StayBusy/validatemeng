<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername');
            $table->string('phone');
            $table->string('email',100)->unique();
            $table->string('sex');
            $table->date('dob');
            $table->unsignedinteger('country_id');
            $table->string('religion');
            $table->string('maritalstatus');
            $table->string('city');
            $table->unsignedinteger('state_id');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('fatherwork');
            $table->string('motherwork');
            $table->string('parentaddress');
            $table->string('language');
            $table->string('nokname');
            $table->string('nokcontact');
            $table->string('faculty');
            $table->string('department');
            $table->string('course');
            $table->string('specilization');
            $table->unsignedinteger('duration');
            $table->string('grade');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('facultyhead');
            $table->string('hod');
            $table->string('disability');
            $table->string('disability_specify')->nullable();
            $table->string('specialneeds');
            $table->string('specialneeds_specify')->nullable();
            $table->string('ca');
            $table->string('project');
            $table->string('uid');
            $table->string('school');
            $table->unsignedinteger('user_id');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('students');
    }
}
