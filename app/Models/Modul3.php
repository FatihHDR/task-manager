<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module3Codelab extends Model
{
    protected $table = 'module3_codelabs';
    protected $casts = [
        'materials' => 'array',
    ];
    protected $fillable = [
        'student_name',
        'task_type',
        'description',
        'codelab_grade',
        'due_date_time',
        'location',
        'materials',
        'status',
        'priority',
        'course',
        'notes',
        'completed_date',
    ];
    protected $dates = [
        'due_date_time',
        'completed_date',
    ];
}

class Module3Kegiatan extends Model
{
    protected $table = 'module3_kegiatan';
    protected $casts = [
        'materials' => 'array',
    ];
    protected $fillable = [
        'student_name',
        'task_type',
        'description',
        'activity_grade',
        'due_date_time',
        'location',
        'materials',
        'status',
        'priority',
        'course',
        'notes',
        'completed_date',
    ];
    protected $dates = [
        'due_date_time',
        'completed_date',
    ];
}
