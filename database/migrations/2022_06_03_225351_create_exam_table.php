<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
			$table->string('abbreviation')->nullable();
			$table->string('name')->nullable();
			$table->string('category')->nullable();
			$table->string('destiny')->nullable();
			$table->string('label_group')->nullable();
			$table->string('quantity_label')->nullable();
			$table->string('exam_kit')->nullable();
			$table->string('exam_support')->nullable();
			$table->string('exam_price')->nullable();
			$table->string('exam_editor')->nullable();
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
        Schema::dropIfExists('exams');
    }
}
