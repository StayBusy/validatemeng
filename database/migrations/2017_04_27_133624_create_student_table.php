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
            $table->string('email');
            $table->string('sex');
            $table->string('dob');
            $table->string('country');
            $table->string('religion');
            $table->string('maritalstatus');
            $table->string('city');
            $table->string('state');
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
            $table->string('duration');
            $table->string('grade');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('facultyhead');
            $table->string('hod');
            $table->string('disability');
            $table->string('specialneeds');
            $table->string('ca');
            $table->string('project');
            $table->string('uid');
            $table->string('schoolid');
            $table->string('userid');            
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
