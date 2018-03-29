<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',500);
            $table->string('last_name',500);
            $table->string('email',191)->unique();
            $table->string('password');
            $table->string('contact_number',100);
            $table->string('photo',500);
            $table->bigInteger('work_id');
            //$table->unsignedBigInteger('work_id');
            $table->unsignedBigInteger('prison_id');
            $table->unsignedBigInteger('role_id');
            $table->tinyInteger('status');            
            $table->rememberToken();
            $table->timestamps();
           //$table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');
            $table->foreign('prison_id')->references('id')->on('prisons')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
