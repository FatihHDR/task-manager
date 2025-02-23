<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module6Codelab extends Model
{
    protected $table = 'module6_codelabs';
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

class Module6Kegiatan extends Model
{
    protected $table = 'module6_kegiatan';
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
