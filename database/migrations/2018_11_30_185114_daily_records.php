<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DailyRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('low_blood_pressure');
            $table->integer('high_blood_pressure');
            $table->integer('weight');
            $table->integer('fat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('daily_records');
    }
}
