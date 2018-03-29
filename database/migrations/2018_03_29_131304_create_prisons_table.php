<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',500);
            $table->string('longtitude',100);
            $table->string('latitude',100);
            $table->string('prison_code',100);
            $table->tinyInteger('status');
            $table->string('street',500);
            $table->string('postcode',500);
            $table->string('city',200);
            $table->string('town',200);
            $table->string('county',200);
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
        Schema::dropIfExists('prisons');
    }
}
