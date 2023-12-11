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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('surname');
            $table->enum('gender',['male','female','other']);
            $table->integer('age');
            $table->string('date_of_birth');
            $table->integer('year_of_study');
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
            $table->string('guardian_nrc');
            $table->string('guardian_occupation');
            $table->string('guardian_phone_no');
            $table->string('guardian_email');
            $table->string('room_id');

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
        Schema::dropIfExists('histories');
    }
};
