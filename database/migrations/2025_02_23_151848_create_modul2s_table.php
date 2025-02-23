<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('module2_codelabs', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('task_type');
            $table->text('description');
            $table->integer('codelab_grade')->nullable();
            $table->dateTime('due_date_time')->nullable();
            $table->string('location')->nullable();
            $table->json('materials')->nullable();
            $table->string('status')->default('pending');
            $table->integer('priority')->default(1);
            $table->string('course')->nullable();
            $table->text('notes')->nullable();
            $table->dateTime('completed_date')->nullable();
        });

        Schema::create('module2_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('task_type');
            $table->text('description');
            $table->integer('activity_grade')->nullable();
            $table->dateTime('due_date_time')->nullable();
            $table->string('location')->nullable();
            $table->json('materials')->nullable();
            $table->string('status')->default('pending');
            $table->integer('priority')->default(1);
            $table->string('course')->nullable();
            $table->text('notes')->nullable();
            $table->dateTime('completed_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module2_codelabs');
        Schema::dropIfExists('module2_kegiatan');
    }
};
