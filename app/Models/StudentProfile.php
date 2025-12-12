<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentProfile extends Model
{
    use HasFactory;
    protected $fillable = ['age', 'email', 'address', 'student_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
