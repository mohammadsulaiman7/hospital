<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\News;
use App\Models\Speciality;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {      
    }
    public function index()
    {
        // $doctors = Doctor::all();
        // $specialities = Speciality::all();
        // return view('user.home', compact('doctors', 'specialities','times'));
        if (Auth::user()->usertype == '0') {
            $doctors = Doctor::get();
            $specialities = Speciality::all();
            $newss=News::latest()->take(3)->get();
            $times=[];
            $periods = CarbonPeriod::create('08:00','60 minutes','20:00');
            foreach($periods as $period)
            {
                $times[] = $period->format('H:i');
            }
            return view('user.home', compact('doctors', 'specialities','times','newss'));
        } else {
            
            $newss=News::latest()->take(2)->get();
            $doctors=Doctor::all();
            $users = User::all();
            $appointments = Appointment::all();
            $specialities = Speciality::with('appointments')->get();
            return view('dashboard.home', compact('users', 'appointments','specialities','doctors','newss'));
        }
    }
    public function getValues($selectedValue)
    {
        // Fetch data from the model based on $selectedValue
        $data = Doctor::where('speciality_id', $selectedValue)->get();
        return response()->json($data);
    }

}
