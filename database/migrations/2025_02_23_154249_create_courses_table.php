<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('course_code')->unique(); // Unique course code
            $table->string('course_name'); // Name of the course
            $table->text('description')->nullable(); // Description of the course
            $table->integer('credits'); // Number of credits for the course
            $table->string('department'); // Department offering the course
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};