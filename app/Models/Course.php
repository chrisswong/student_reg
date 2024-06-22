<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function students() {
        return $this->belongsToMany(Student::class, 'student_enrolment', 'course_id', 'student_id');
    }
}
