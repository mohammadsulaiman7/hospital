<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctors = Doctor::get();
                $specialities = Speciality::all();
                return view('user.home', compact('doctors', 'specialities'));
            } else {
                $users = User::all();
                $appointments = Appointment::all();
                return view('admin.home', compact('users', 'appointments'));
            }
        } else {

            return redirect()->back();
        }
    }
    public function index()
    {
        $doctors = Doctor::all();
        $specialities = Speciality::all();
        return view('user.home', compact('doctors', 'specialities'));
    }
    public function getValues($selectedValue)
    {
        // Fetch data from the model based on $selectedValue
        $data = Doctor::where('speciality_id', $selectedValue)->get();
        return response()->json($data);
    }

}
