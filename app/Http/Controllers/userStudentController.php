<?php

namespace App\Http\Controllers;

use App\Models\userStudent;

class userStudentController extends Controller
{
    public function student_user()
    {
        $student_name = userStudent::all();
        return response()->json($student_name);
    }
}
