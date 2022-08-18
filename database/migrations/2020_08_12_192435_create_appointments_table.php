<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('user_id');
            $table->string('patient_name');
            $table->string('password');
            $table->string('gender');
            $table->date('appointment_date');
            $table->string('zip_code');
            $table->string('address');
            $table->date('birthdate');
            $table->string('age');
            $table->string('rg')->nullable();
            $table->string('cpf');
            $table->string('city');
            $table->string('phone');
            $table->string('responsible');
            $table->string('email');
            
            $table->string('doctor');
            $table->string('code');
            $table->string('insurance');
            $table->string('ins_company');

            //$table->string('delivery_date');
            //$table->string('hour');
            
            $table->string('fast');
            $table->string('dum');
            $table->string('diagnosis');
            $table->string('medicines');
            $table->string('comments');
            $table->string('sub_total');
            $table->string('disc');
            $table->string('total');
            $table->string('entrance');
            $table->string('booked_by');

            //$table->string('crm');
            $table->unsignedBigInteger('appointment_with');
            $table->string('available_time');
            //$table->unsignedBigInteger('available_slot');
            //$table->unsignedBigInteger('booked_by');
            $table->string('status')->default(0)->comment('0=>pending,1=>complete,2=>cancel');
            $table->tinyInteger('is_deleted')->default(0)->comment('0=>active,1=>inactive');
            //$table->foreign('booked_by')->references('id')->on('users');
            //$table->foreign('appointment_for')->references('id')->on('users');
            //$table->foreign('appointment_with')->references('id')->on('users');
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
        Schema::dropIfExists('appointments');
    }
}
