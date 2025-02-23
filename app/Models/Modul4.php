<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module4Codelab extends Model
{
    protected $table = 'module4_codelabs';
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

class Module4Kegiatan extends Model
{
    protected $table = 'module4_kegiatan';
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
