<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\coursesgrades;
use App\Models\registeredcourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $coursesdetails = Courses::all();
        $registeredcources = registeredcourses::where('userid',Auth::id())->get();
        $currentcourses = coursesgrades::where('userid',Auth::id())->get();
        return view('user.STUDENT',compact('coursesdetails','registeredcources','currentcourses'));
    }
    public function redirects()
    {
        if(Auth::id()){

            if(Auth::user()->usertype == '1'){

                return view('admin.adminhome');
            }
            else{
                $coursesdetails = Courses::all();
                $registeredcources = registeredcourses::where('userid',Auth::id())->get();
                $currentcourses = coursesgrades::where('userid',Auth::id())->get();
                return view('user.STUDENT',compact('coursesdetails','registeredcources','currentcourses'));
            } 
        }
        else{
            $coursesdetails = Courses::all();
            $registeredcources = registeredcourses::where('userid',Auth::id())->get();
            $currentcourses = coursesgrades::where('userid',Auth::id())->get();
            return view('user.STUDENT',compact('coursesdetails','registeredcources','currentcourses'));
        }
    }
}
