<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('task_name'); // Name of the task
            $table->text('description')->nullable(); // Description of the task
            $table->date('due_date'); // Due date for the task
            $table->string('priority'); // Priority of the task (high, medium, low)
            $table->string('status'); // Status of the task (not started, in progress, completed)
            $table->string('type'); // Type of task (assignment, exam, personal)
            $table->foreignId('course_id')->nullable()->constrained('courses')->onDelete('set null'); // Foreign key to courses table
            $table->date('created_date'); // Date when the task was created
            $table->date('updated_date'); // Date when the task was last updated
            $table->date('completed_date')->nullable(); // Date when the task was completed
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};