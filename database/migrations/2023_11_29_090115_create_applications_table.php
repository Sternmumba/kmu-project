<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('surname');
            $table->enum('gender',['male','female','other']);
            $table->integer('year_of_study');
            $table->string('room_id');
            $table->integer('academic_year');
            $table->string('student_address');
            $table->string('intake');
            $table->string('registration_status');
            $table->string('medical_condition');
            $table->string('student_phone_no');
            $table->string('programme');
            $table->string('student_nrc');
            $table->string('password');
            $table->string('student_email')->unique();
            $table->string('guardian_name');
            $table->string('guardian_relation');
            $table->string('guardian_phone_no');
            $table->string('guardian_email');
         
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
        Schema::dropIfExists('applications');
    }
};
