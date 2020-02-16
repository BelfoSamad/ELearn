<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        //Gettin the Courses of the User Logged In
        $user = auth()->user();
        if ($user->type == 'Teacher'){
            $courses = auth()->user()->constructed_courses()->get();
        }else{
            $courses = auth()->user()->my_courses()->get();
        }
        return view('profile', ['courses' => $courses]);
    }
}
