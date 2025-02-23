<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'description',
        'due_date',
        'priority',
        'status',
        'type',
        'course_id',
        'created_date',
        'updated_date',
        'completed_date',
    ];

    protected $casts = [
        'due_date' => 'date', // Cast to date
        'created_date' => 'date', // Cast to date
        'updated_date' => 'date', // Cast to date
        'completed_date' => 'date', // Cast to date
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
