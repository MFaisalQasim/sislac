<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAvailableSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_available_slots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('doctor_available_time_id');
            $table->time('from');
            $table->time('to');
            $table->tinyInteger('is_deleted')->default(0)->comment('0=>active,1=>inactive');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->foreign('doctor_available_time_id')->references('id')->on('doctor_available_times');
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
        Schema::dropIfExists('doctor_available_slots');
    }
}
