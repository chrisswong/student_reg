<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function courses() {
        return $this->belongsToMany(Course::class, 'student_enrolment', 'student_id', 'course_id');
    }
}
