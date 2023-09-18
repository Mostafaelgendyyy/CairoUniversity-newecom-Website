<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\coursesgrades;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function addashboard()
    {
        return view('admin.adminhome');
    }
    public function addcources()
    {
        return view('admin.addcources');
    }
    public function savecourse(Request $request)
    {
        $material = $request->Material;
        $course_image = $request->course_image;
        $data = new Courses();
        $data->Course_name = $request->Course_name;
        $data->Instructor = $request->Instructor;
        $data->save();
        return redirect()->back();
    }
    public function showcourses()
    {
        $data = Courses::all();
        return view('admin.showcourses',compact('data'));
    }
    public function deleteCourse($id)
    {
        $data = Courses::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function addcoursegrade()
    {
        $users = User::where('usertype','0')->get();
        $courses = Courses::all();
        return view('admin.coursegrade',compact('users','courses'));
    }
    public function savecoursegrade(Request $request)
    {
        $data = new coursesgrades;
        $data->userid = $request->userid;
        $data->Coursename = $request->Course_name;
        $data->Midterm = $request->Midterm;
        $data->Teamwork = $request->Teamwork;
        $data->Final = $request->Final;
        $data->Total = $request->Total;
        $data->save();
        return redirect()->back(); 
    }
    public function showcoursesgrades()
    {
        $data = coursesgrades::all();
        return view('admin.showcoursesgrades',compact('data'));
    }
    public function deleteCoursegrade($id)
    {
        $data = coursesgrades::find($id);
        $data->delete();
        return redirect()->back();
    }
}
