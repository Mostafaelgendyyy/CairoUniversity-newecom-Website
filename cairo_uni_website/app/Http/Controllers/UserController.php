<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\registeredcourses;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function enrollcourses($id,Request $request)
    {
        $course = Courses::find($id);
        $corimage = $course->course_imagepath;
        $data = new registeredcourses();
        $data->userid = $request->userid;
        $data->course_name = $course->Course_name;
        $data->course_instructor = $course->Instructor;
        $data->save();
        return redirect()->back();
    }
}
