<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addDoctor(){
        $specialities=Speciality::all();
        $users=User::with('doctor');
        return view('admin.add-doctor',compact('specialities','users'));
    }
}