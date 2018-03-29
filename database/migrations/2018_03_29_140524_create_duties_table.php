<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDutiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('duty_code',500);
            $table->dateTime('date');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('vacancies',500);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('prison_id');
            $table->unsignedBigInteger('duty_type_id');
            $table->string('location_name',500);
            $table->string('location_street',500);
            $table->string('location_city',500);
            $table->string('location_town',500);
            $table->string('location_postcode',500);
            $table->string('prisoner_name',500);
            $table->string('extra_info',500);
            $table->string('notes',500);
            $table->tinyInteger('status');            
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('prison_id')->references('id')->on('prisons')->onDelete('cascade');
            $table->foreign('duty_type_id')->references('id')->on('duty_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duties');
    }
}
