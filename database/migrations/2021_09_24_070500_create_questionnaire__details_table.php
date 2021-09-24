<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnaireDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire__details', function (Blueprint $table) {
            $table->id();
            $table->string('institute_name');
            $table->string('institute_logo')->nullable();
            $table->string('institute_address');
            $table->string('exam_name');
            $table->string('questionnaire_subject');
            $table->string('department');
            $table->string('semester');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->tinyInteger('sms_student_report')->nullable()->default('1')->comment('1= inactive, 2= active');
            $table->tinyInteger('sms_guardian_report')->nullable()->default('1')->comment('1= inactive, 2= active');
            $table->text('quote');
            $table->tinyInteger('status')->nullable()->default('1')->comment('1=not done, 2=done');
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
        Schema::dropIfExists('questionnaire__details');
    }
}
