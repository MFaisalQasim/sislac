<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('patient_dob')->nullable();
            $table->string('patient_Age')->nullable();
            $table->string('patient_rg')->nullable();
            $table->string('patient_CPF')->nullable();
            $table->string('patient_responsible')->nullable();
            $table->string('patient_health')->nullable();
            $table->string('patient_company')->nullable();
            $table->string('patient_enrollment')->nullable();
            $table->string('patient_plan')->nullable();
            $table->string('patient_observation')->nullable();
            $table->string('patient_social_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            //
        });
    }
}
