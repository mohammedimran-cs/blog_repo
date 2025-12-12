<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Teacher;


use Illuminate\Http\Request;

class TutoController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'TutoController index method']);
    }

    public function getStudentById($id)
    {
        $student = Student::find($id);
        return response()->json(['student' => $student]);
    }
    public function getStudentByIdWithTeacher($id)
    {
        $student = Student::with('teacher')->find($id);
        info($student);
        return response()->json(['student' => $student]);
    }

    public function getTeacherByIdWithStudents($id)
    {
        $teacher = Teacher::with('students')->find($id);
        return response()->json(['teacher' => $teacher]);
    }

    public function getStudentByIdWithCoursesProfileTeacher($nam)
    {
        $student = Student::with(['profile','courses', 'teacher'])->find($nam);
        return response()->json(['student' => $student]);
    }

    public function getTeacherBySqlQuery($id){
        $teacher = Teacher::select('name')->where(function($query) use ($id){
            $query->where('id',$id);
        })->get();
        return response()->json(['teacher' => $teacher]);
    }
}
