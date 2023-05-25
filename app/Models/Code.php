<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->belongsTo(Students::class,'student_id');
    }
    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }
}
