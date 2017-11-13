<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InstitutionUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('institution_users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('inst_id');
            $table->unsignedinteger('user_id');                   
            $table->string('status')->nullable();         
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
       Schema::drop('institution_users');
    }
}
