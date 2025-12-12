<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name','teacher_id'];
    protected $hidden = ['created_at', 'updated_at'];

    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function profile()
    {
        return $this->hasOne(StudentProfile::class);
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses');
    }

}
